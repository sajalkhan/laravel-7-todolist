<style>
    a{
        text-decoration: none;
        font-size: 20px;
        color: white;
    }
    .nav{
        background: tan;
    }
    .nav ul{
        display: flex;
        justify-content: left;
        list-style: none;
    }

    .nav ul li{
        padding: 10px;
        margin: 10px;
    }
    .nav ul li:hover{
        background: tomato;
    }
</style>

<div class="nav">
    <ul>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('about')}}">About</a></li>
    </ul>
</div>

<div>
    <select>
        @foreach ($data as $item)
            <option>{{$item}}</option>
        @endforeach
    </select>
</div>
