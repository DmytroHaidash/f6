
<h4>Заказ на книгу:</h4>
<p>Имя:{{ $data->user->name }}</p>
<p>email:{{ $data->user->contact }}</p>
<br>
<p>-----<br>{{ \Carbon\Carbon::now()->formatLocalized('%d %B %Y') }}</p>