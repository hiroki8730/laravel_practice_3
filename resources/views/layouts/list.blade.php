@foreach($items as $key=>$item)
<ul>
    <li>{{ $key+1 }}</li>
    <li>{{ $item->id }}</li>
    <li>{{ $item->name }}</li>
    <li>{{ $item->mail }}</li>
    <li>{{ $item->tel }}</li>
    <li>{{ $item->content }}</li>
</ul>
@endforeach

<h2>削除したいデータのIDを入力してください</h2>
<div>
    <form action="/hello/del" method="post">
        {{ csrf_field() }}
        <input type="number" name="id" value="id">
        <input type="submit" value="削除する">
    </form>
</div>