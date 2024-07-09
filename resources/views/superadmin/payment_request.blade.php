
<div class="admin_main_right p-30 bd-r-5">
    <div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
        <h4 class="fz-20-sb-black">Payment Request</h4>
    </div>
    <!-- Table -->
	<div class="table-responsive">
		<table class="table eTable">
			<!-- Table Head -->
			<thead>
			  <tr>
			    <th scope="col">Name</th>
			    <th scope="col">Paid Amount</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Account Number</th>
                <th scope="col">Transaction ID</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
			  </tr>
			</thead>
			<tbody>
                @foreach ($payments as $payment)
                @if($payment->payment_method == 'bkash' || $payment->payment_method == 'nagad')
                <tr>
                    <td>
                        <div class="min-w-100">
                            <p class="fz-15-sb-black">{{ $payment->user->name }}</p>
                        </div>
                    </td>
                    <td>
                        {{ $payment->paid_amount }}
                    </td>
                    <td>
                        <p class="status-btn status-up">{{ Ucwords($payment->payment_method )}}</p>
                    </td>
                    <td>
                        {{ $payment->account_number }}
                    </td>
                    <td>
                        {{ $payment->transaction_keys }}
                    </td>
                    <td>
                        {{ \Carbon\Carbon::createFromTimestamp($payment->date_added)->toDateTimeString() }}
                    </td>
                    <td>
                        @if($payment->status == 'pending')
                        <p class="status-btn status-down">Pending</p>
                        @else
                        <p class="status-btn status-up">Approve</p>
                        @endif
                    </td>
                    <td>
                        <div class="adminTable-action">
                            <div class="btn-group">
                                <button type="button" class="dropdown-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.paymentRequestApprove', $payment->id) }}', 'undefined');">Approve</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;" onclick="confirmModal('{{ route('superadmin.paymentRequestDelete', $payment->id) }}', 'undefined')">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                @endif
            @endforeach
            
				
			</tbody>
		</table>
	</div>
</div>