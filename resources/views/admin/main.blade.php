@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.parts.menu')
            <div class="col-xs-9">
                <div class="col-xs-12 title-block">Форма добавлення нового посту</div>
                <div class="col-xs-12 form">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Назва</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Назва">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Опис</label>
                            <div class="col-sm-10">
                                <textarea name="" id="article-description" class="form-control" rows="10" placeholer="Опис"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Повний текст посту</label>
                            <div class="col-sm-10">
                                <textarea name="" id="article-text" class="form-control" rows="10" placeholer="Повний текст посту"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Теги</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Назва">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Додати</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
