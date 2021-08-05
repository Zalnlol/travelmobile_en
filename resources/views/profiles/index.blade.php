@extends('layoutUser.layout')
@section('titleweb', 'Trang cá nhân')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/userprofile.css') }}">
@section('bodycode')

    <div class="cover-profile new-profile" style="background-image: url('{{asset('images/homepage-driving.jpg')}}');"></div>
    <div class="profile__sect">
        <div class="content-profile--new">
            <div class="desc-profile desc-account">
                <div class="avatar-box">
                    <div class="avatar avatar--xl has-edit">
                        <img style="width:100%" src="{{ asset("/img/$user->avatar_image") }}">
                    </div>
                </div>
                <div class="snippet">
                    <div class="profile-info">
                        <div class="item-content">
                            <div class="item-title">
                                <p>{{ $user->name }}</p><a class="func-edit" title="Chỉnh sửa"></a>
                            </div>
                            
                        @if ($user_id == $user->user_id)
                            
                                <a href="{{ url('user/profile/'.$user->user_id.'/edit') }}"><button type="button" class="btn btn-success">Edit</button></a> 
                        @endif

                        
                            <div class="d-flex"><span class="join">
                                Joined date: {{ $user->created_at->format('d/m/Y') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="line-info">
                        <div class="d-flex">
                            <div class="info"><span class="label">Date of birth </span><span
                                    class="ctn">{{ $user->dob }}</span></div>
                            <div class="info"><span class="label">Gender </span><span
                                    class="ctn">{{ $user->gender ? "Nam" : "Nữ" }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="desc-profile">
                <div class="information information--acc">
                    <div class="inside">
                        <ul>
                            <li><span class="label">Mobile</span><span>{{ $user->mobile ? "Registered":"Unavailable" }}</span></li>
                            <li><span class="label">Driver license</span><span>{{ $user->driver_id_image_approval ? "Verified": "Unverified"}}</span></li>
                            <li><span class="label">Email</span><span class="ctn">{{ $user->email }}</span></li>
                            <li><span class="label">Facebook</span><span class="ctn"><span>{{ $user->facebook_id ? "Connected" : "None" }}
                            <li><span class="label">Google</span><span class="ctn"><span>{{ $user->google_id ? "Đã kết nối" : "None" }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile__wrap">
            <div class="review__sect">
                <div class="review-container"></div>
            </div>
        </div>
    </div>
@endsection
