@extends('emails.layouts.header')
@section('content')
<tr>
	<td style="padding:25px 50px 5px; background: #fff; font-size:22px; font-family: Arial, sans-serif, Helvetica, Verdana; line-height: 36px; text-align:left; color: #3c3c3c;">
		@if($content)

		<table width="100%" border="1" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th style="padding: 10px 50px 10px;font-weight: bold; color: #100947;">Total Transactions:</th>
					<td style="padding: 10px 50px 10px;font-weight: bold; color: #3d3d3d;">{{ $params['count_total'] }}</td>
				</tr>
				<tr>
					<th style="padding: 10px 50px 10px;font-weight: normal; color: #100947;">Payment Transactions:</th>
					<td style="padding: 10px 50px 10px;font-weight: normal; color: #3d3d3d;">{{ $params['count_payment'] }}</td>
				</tr>
				<tr>
					<th style="padding: 10px 50px 10px;font-weight: normal; color: #100947;">Fee Transactions:</th>
					<td style="padding: 10px 50px 10px;font-weight: normal; color: #3d3d3d;">{{ $params['count_fee'] }}</td>
				</tr>
				<tr>
					<th style="padding: 10px 50px 10px;font-weight: bold; color: #100947;">Payment Date:</th>
					<td style="padding: 10px 50px 10px;font-weight: bold; color: #3d3d3d;">{{ \FFM::date($payment_date) }}</td>
				</tr>
				<tr>
					<th style="padding: 10px 50px 10px;font-weight: bold; color: #100947;">Checked Time:</th>
					<td style="padding: 10px 50px 10px;font-weight: bold; color: #3d3d3d;">{{ $checked_time }}</td>
				</tr>
				<tr>
					<th style="padding: 10px 50px 10px;font-weight: bold; color: #100947;">Total Processed Count:</th>
					<td style="padding: 10px 50px 10px;font-weight: bold; color: #3d3d3d;">{{ $params['count_total_processing'] }}</td>
				</tr>
				<tr>
					<th style="padding: 10px 50px 10px;font-weight: normal; color: #100947;">Payment Processed Count:</th>
					<td style="padding: 10px 50px 10px;font-weight: normal; color: #3d3d3d;">{{ $params['count_payment_processing'] }}</td>
				</tr>
				<tr>
					<th style="padding: 10px 50px 10px;font-weight: normal; color: #100947;">Fee Processed Count:</th>
					<td style="padding: 10px 50px 10px;font-weight: normal; color: #3d3d3d;">{{ $params['count_fee_processing'] }}</td>
				</tr>
				<tr>
					<th style="padding: 10px 50px 10px;font-weight: bold; color: #100947;">Total Processed:</th>
					<td style="padding: 10px 50px 10px;font-weight: bold; color: #3d3d3d;">{{ \FFM::dollar($params['total_processed']) }}</td>
				</tr>
				<tr>
					<th style="padding: 10px 50px 10px;font-weight: normal; color: #100947;">Processed Payment Amount:</th>
					<td style="padding: 10px 50px 10px;font-weight: normal; color: #3d3d3d;">{{ \FFM::dollar($params['total_processed_payment']) }}</td>
				</tr>
				<tr>
					<th style="padding: 10px 50px 10px;font-weight: normal; color: #100947;">Processed Fee:</th>
					<td style="padding: 10px 50px 10px;font-weight: normal; color: #3d3d3d;">{{ \FFM::dollar($params['total_processed_fee']) }}</td>
				</tr>
			</thead>
		</table>
		@else
		 No Data
		@endif
	</td>
</tr>
@endsection