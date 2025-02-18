
@extends('admin/layouts/admin')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <div class="card-body pt-0">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-125px">First name</th>
                            <th class="min-w-125px">Last name</th>
                            <th class="min-w-125px">Email</th>
                            <th class="min-w-125px">Phone number</th>
                            <th class="min-w-125px">Message</th>
                            <th class="min-w-125px">Created at</th>
                            <th class="text-end min-w-70px">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="fw-bold text-gray-600">
                        @foreach ($messages as $msg)
                        <tr>
                            <td>{{ $msg->first_name }}</td>
                            <td>{{ $msg->last_name }}</td>
                            <td><a href="mailto:{{ $msg->email }}">{{ $msg->email }}</a></td>
                            <td>{{ $msg->phone_number }}</td>
                            <td><a href="#" data-bs-toggle="modal" data-fulltext="{{ $msg->message }}" data-bs-target="#kt_modal_add_customer" id="showFullText">{{ \Illuminate\Support\Str::limit($msg->message, $limit = 29, $end = '...') }}</a></td>
                            <td>{{ $msg->created_at }}</td>

                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="mailto:{{ $msg->email }}" class="menu-link px-3" data-kt-customer-table-filter="reply_row">Reply</a>
                                        <a href="{{ route('admin.messages.delete', $msg->id) }}" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <div class="modal-content">
                        
                        <div class="modal-header" id="kt_modal_add_customer_header">
                            <h2 class="fw-bolder">Message</h2>
                            <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="modal-body py-10 px-lg-17">
                            <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                                <p id="message-text"></p>                         
                            </div>
                        </div>

                </div>
            </div>
        </div>

    </div>
</div>

<script>
    let msgText = document.getElementById('message-text');
    let modals = document.querySelectorAll('#showFullText');

    modals.forEach(element => {
        element.onclick = (e) => {
            e.preventDefault();
            msgText.innerText = e.target.dataset.fulltext;
        }
    });
</script>
@endsection