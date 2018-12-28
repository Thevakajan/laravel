@include('inc.header')
<div class="container">
<div class="row">
  @if(session('info'))
  <div class="col-mg-6 alert alert-success">
      {{session('info')}}
  </div >
  
  @endif
        <table class="table table-striped table-hover ">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($articles) > 0)
                      @foreach ($articles->all() as $article)
                          
                  
                  <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <td>{{$article->description}}</td>
                    <td>
                    <a href='{{ url("/read/{$article->id}")}}' class="btn btn-primary">Read</a>
                    <a href='{{ url("/update/{$article->id}")}}' class="btn btn-success">Update</a>
                    <a href= '{{ url("/delete/{$article->id}")}}' class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  @endif
               
                </tbody>
              </table> 
</div>
</div>
@include('inc.footer')