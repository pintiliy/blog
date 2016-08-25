@extends('layouts.app')
@section('content')
    <h1>User roles</h1>
    <div>
        <style>
            .tableUserRoles td, th {
                padding: 5px;
                border: 1px solid black;
                text-align: center;
            }

            .tableUserRoles th {
                background-color: #295974;
                color: white;
            }
        </style>

        @if($users)
            <form method="post" action="{{action('TestRoleController@saveUserPermissions')}}" >
                {{csrf_field()}}
                <table class="tableUserRoles" >

                    <tr>
                        <th>name</th>
                        <th>email</th>
                        @if($roles)
                            @foreach($roles as $role)
                                <th>{{$role->name}}</th>
                            @endforeach
                        @endif
                    </tr>

                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>

                                @if($roles)
                                    @foreach($roles as $role)
                                        <td>
                                            <input
                                                name="users[{{$user->id}}]"
                                                type="radio" {{ $user->hasRole($role->name) ? 'checked' :'' }}
                                                value="{{$role->id}}"
                                            />
                                        </td>
                                    @endforeach
                                @endif
                            </tr>
                        @endforeach
                </table><br />
                <input type="submit" value="save roles" />
            </form>
        @endif

        @if($roles)
            <h1>Roles</h1>
            <form method="post" action="{{action('TestRoleController@saveRolePermissions')}}" >
                {{csrf_field()}}
                <table class="tableUserRoles" >

                    <tr>
                        <th> name </th>
                        <th> display </th>
                        <th> description </th>
                        @if($permissions)
                            @foreach($permissions as $permission)
                                <th>{{$permission->name}}</th>
                            @endforeach
                        @endif
                    </tr>

                    @foreach($roles as $role)
                        <tr>
                            <td>{{$role->name}}</td>
                            <td>{{$role->display_name}}</td>
                            <td>{{$role->description}}</td>
                            @if($permissions)
                                @foreach($permissions as $permission)
                                    <td>
                                        <input
                                            type="checkbox"
                                            value="{{$permission->id}}"
                                            name="roles[{{$role->id}}][]"
                                            {{$role->hasPerm($permission) ? 'checked' : ''}}
                                        />

                                    </td>
                                @endforeach
                            @endif
                        </tr>
                    @endforeach

                </table>
                <br />
                <input type="submit" value="Save permissions" />
            </form>
        @endif

    </div>
    <br />
@endsection