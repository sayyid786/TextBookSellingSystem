     <div class="form-group">
        {{Form::label('title', 'Title of book',['class' => 'text-dark'])}}
        {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title of book'])}}
     </div>

     <div class="form-group">
        {{Form::label('description', 'Description',['class' => 'text-dark'])}}
        {{Form::textarea('description',null, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Description'])}}
     </div>


     <div class="form-group">
        {{Form::label('image','Picture',['class' => 'text-dark'])}}
        <br>
        {{Form::file('image')}}
     </div>

     <div class="form-group">
            {{Form::label('author', 'Please specify the author',['class' => 'text-dark'])}}
            {{Form::text('author',null, ['class' => 'form-control', 'placeholder' => 'Author'])}}
     </div>

     <div class="form-group">
            {{Form::label('quantity', 'Please specify the quantity',['class' => 'text-dark'])}}
            {{Form::text('quantity',null, ['class' => 'form-control', 'placeholder' => 'Quantity'])}}
     </div>

     <div class="form-group">
        {{Form::label('category', 'Please specify the category',['class' => 'text-dark'])}}
        <select class="form-control" name="category_id">
                <option disabled selected value> -- select an option -- </option>
            @foreach($categories as $category) 
                <option value={{$category->id}}>{{$category->name}}</option>
            @endforeach
        </select>
     </div>

     <div class="form-group">
            {{Form::label('location', 'Please specify the item location',['class' => 'text-dark'])}}
            {{Form::text('location',null, ['class' => 'form-control', 'placeholder' => 'Location'])}}
     </div>

     <div class="form-group">
        {{Form::label('publishedOn', 'Publication Date',['class' => 'text-dark'])}}
        {{Form::date('publishedOn',null, ['class' => 'form-control', 'placeholder' => 'Event Date', 'onkeydown' => 'return false', 'id' => 'datepicker'])}}
     </div>


     <div class="form-group">
            {{Form::label('price', 'Price of Book',['class' => 'text-dark'])}}
            {{Form::text('price', null, ['class' => 'form-control', 'placeholder' => '£'])}}
     </div>

     <div class="form-group">
            {{Form::label('type', 'Please specify the book type',['class' => 'text-dark'])}}
            {{Form::text('type', null, ['class' => 'form-control', 'placeholder' => 'Type'])}}
     </div>

     <div class="form-group">
            {{Form::label('ISBN', "Please specify the book's ISBN number",['class' => 'text-dark'])}}
            {{Form::text('ISBN', null, ['class' => 'form-control', 'placeholder' => 'ISBN'])}}
     </div>
     