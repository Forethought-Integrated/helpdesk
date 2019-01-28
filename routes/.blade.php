 @foreach($data['boards']['data'] as $data)
                    <tr>
                      <td>{{$data['board_id']}}</td>
                      <td><a href="{{ url('boards'.'/'.$data['owner_id'])}}">{{$data['owner_id']}}</a></td>
                      {{-- <td>{{$data['account_name']}}</td> --}}
                      <td>{{$data['name']}}</td>
                      <td>{{$data['description']}}</td>
                     
      {{--                 <td>
                        <a class="btn btn-small btn-primary" href="{{ url('account'.'/'.$data['board_id'])}}">Edit</a>
                      </td>
       --}}                <td>
                       <form action="{{url('helpdesk'.'/'.$data['board_id'])}}" method="post">
                          {{csrf_field()}}
                            @method('DELETE')
                          <button class="btn remove_btn " type="submit">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach