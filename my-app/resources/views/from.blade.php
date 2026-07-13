@extends('layout')

@section('title', 'เขียนบทความใหม่')


@section('content')
    <h2 class="text text-center py-2">เขียนบทความใหม่</h2>
    <form>
        <div class="from-group">
            <label for="title">ชื่อบทความ</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="from-group">
            <label for="title">เนื้อหา</label>
            <textarea name="content" class="form-control" cols="30" rows="5" ></textarea>
        </div>
        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/blog2" class="btn btn-secondary">บทความทั้งหมด</a>
    </form>
@endsection
