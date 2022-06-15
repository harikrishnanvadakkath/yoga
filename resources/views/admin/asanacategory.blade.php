<div class="row">
    <a href="{{route('dashboard.asanacategory}}"  class="btn btn-success">Add</a>
	</div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
                <th>Action</th>
</tr>
</thead>
<tbody>
    <tr>
        <td>{{Uttanasana}}</td>
        <td>{{Virabhadrasana1}}</td>
        <td>{{Marjaryasana-Bitilasana}}</td>
        <td>{{Bhujangasana}}</td>
        <td>{{Dhanurasana}}</td>
        <td>{{Natarajasana}}</td>
        <td>{{Setu Babdha Sarvangasana}}</td>
        <td>{{Baddha Konasana}}</td>
        <td><a href ="{{route('dashboard.edit'}}" class="btn btn-primary m-1">edit</a>
        <td><a href="{{route('dashboard.destroy'}}" class="btn btn-primary m-1">delete</a>
