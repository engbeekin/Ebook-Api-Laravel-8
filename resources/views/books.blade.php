<h1>Test 100</h1>

@foreach ($books as $book)
    <h1>{{$book->book_name}}</h1>
    <h3>{{$book->author}}</h3>
    <p>{{$book->book_description}}</p>
    <h4>{{$book->publishing_year}}</h4>
     <h3>{{$book->categories->category_name}}</h3>
     <h3>{{$book->booksType->book_type_name}}</h3>

@endforeach
