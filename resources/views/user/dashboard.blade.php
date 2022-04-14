@extends('layouts.app')

@section('title')
    Dashboard Page
@endsection
@include('components.navbar')


@section('content')

    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="row my-5">

                @include('components.alert')

                <table class="table" >
                    <thead >
                        <tr class="align-middle">
                            <th scope="col">Image</th>
                            <th scope="col">BootCamp</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($chekout as $chekout)
                            <tr>
                            <td width="18%">
                                <img src="{{ asset('/images/item_bootcamp.png') }}" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>{{ $chekout->Camp->title }}</strong>
                                </p>
                                <p>
                                  {{$chekout->created_at->format('M d, Y')}}
                                </p>
                            </td>
                            <td>
                                <strong>{{ $chekout->Camp->price }}K</strong>
                            </td>
                            <td>
                                @if ($chekout->is_paid)
                                    <strong class="text-success">Payment Success</strong>        
                                    @else
                                         <strong class="text-primary">Waiting Payment</strong>    
                                    @endif
                            </td>
                            <td>
                                <a href="https://wa.me/+6281237831893?text=Hi, saya ingin bertanya lebih lanjut tentang kelas Bootcamp {{ $chekout->Camp->title }} " class="btn btn-primary">
                                    Contact Support
                                </a>
                            </td>
                        </tr>
                        
                        @empty

                        <td colspan="5">
                            <h3 class="text-center">NO DATA</h3>
                        </td>
                            
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>


@endsection