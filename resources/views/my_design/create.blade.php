<style>
    #create {
        text-align: center;
        border: 1px solid;
        margin: 50px auto;
        width: 50%;
        padding: 20px;
        background-color: rgb(218, 62, 62);
    }

    #create label {
        display: block;
        margin-bottom: 10px;
    }

    #create input[type="text"],
    #create textarea,
    #create input[type="number"],
    #create input[type="file"],
    #create button {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        box-sizing: border-box;
    }

    #create button {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }

    #create button:hover {
        background-color: #45a049;
    }
</style>

@extends('my_design.index')

@section('content')

<form id="create" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">اسم المنتج:</label>
    <input type="text" id="name" name="name" required>
    <label for="category">القسم:</label>
    <input type="text" id="category" name="category" required>
    
    <label for="image">صورة المنتج:</label>
    <input type="file" id="image" name="image" accept="image/*" required>
    <label for="price">السعر:</label>
    <input type="number" id="price" name="price" required>

    

    
    <label for="description">وصف المنتج:</label>
    <textarea id="description" name="description" rows="4" required></textarea>

    <button type="submit">إضافة المنتج</button>
</form>

@endsection
