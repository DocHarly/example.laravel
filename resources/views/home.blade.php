@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Формирование займа</h3></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="" action="index.html" method="post">
                      <div class="form-group">
                        <label for="summ_est">Сумма накопления</label>
                        <input type="text" class="form-control" id="summ_est" aria-describedby="summ_estHelp" placeholder="Сумма накопления">
                        <small id="summ_estHelp" class="form-text text-muted">Ориентировочная стоимость недвижимости</small>
                      </div>
                      <div class="form-group">
                        <label for="rate">Тариф</label>
                        <select class="form-control" id="rate">
                          <option selected>Выбрать...</option>
                          <option value="35">35% - 1месяц</option>
                  				<option value="30">30% - 1 год</option>
                  				<option value="25">25% - 2 года</option>
                  				<option value="20">20% - 3 года</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="rep_period">Срок выплаты займа</label>
                        <select class="form-control" id="rep_period" aria-describedby="rep_periodHelp">
                          <option selected>Выбрать...</option>
                          <option value="35">35% - 1месяц</option>
                  				<option value="30">30% - 1 год</option>
                  				<option value="25">25% - 2 года</option>
                  				<option value="20">20% - 3 года</option>
                        </select>
                        <small id="summ_estHelp" class="form-text text-muted">Срок выплаты займа, после выплаты вступительного пая (сроки указаны в месяцах)</small>
                      </div>
                      <button type="submit" class="btn btn-primary">Рассчитать</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
