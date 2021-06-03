@extends('layouts.app')

@section('content')
    <section class="manage-user">
        <div class="container-fluid-w">
            <div class="row">
                <div class="col">
                    <div class="manage-user__header">
                        <h1>MANAGE USER</h1>

                    </div>
                </div>
                <div class="col">
                    <form action="" method="get"
                          class="manage-user__form">
{{--                        @csrf--}}
                        <input type="text" placeholder="Enter username or email" name="key">
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col">
                    <div class="divTable blueTable">
                        <div class="divTableHeading">
                            <div class="divTableRow">
                                <div class="divTableHead" style="width: 5%">ID</div>
                                <div class="divTableHead" style="width: 10%">Avatar</div>
                                <div class="divTableHead" style="width: 20%">Full Name</div>
                                <div class="divTableHead" style="width: 20%">Email</div>
                                <div class="divTableHead" style="width: 15%">Username</div>
                                <div class="divTableHead" style="width: 15%">Birthday</div>
                                <div class="divTableHead" style="width: 15%;">Action</div>
                            </div>
                        </div>
                        <div class="divTableBody">
                            @if ($users)
                                @foreach ($users as $user)
                                    <div class="divTableRow">
                                        <div class="divTableCell">{{ $user->id }}</div>
                                        <div class="divTableCell">
                                            <img src="{{ url($user->avatar) }}" alt="">
                                        </div>
                                        <div class="divTableCell">
                                            {{ $user->name }}
                                        </div>
                                        <div class="divTableCell">
                                            {{ $user->email }}
                                        </div>
                                        <div class="divTableCell">{{ $user->username }}</div>
                                        <div class="divTableCell">{{ $user->birth_day }}</div>
                                        <div class="divTableCell">
                                            @if($user->is_admin != 1)
                                            <a href="{{ route('admin.user.delete', ['id'=>$user->id]) }}"
                                               onClick="return confirm('Are you sure you want to delete this user?');"
                                               class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i> DELETE
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="blueTable outerTableFooter">
                        <div class="tableFootStyle">
                            <div class="links">
                                {{ $users->links('pagination-links') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
