






{{--@extends('layouts.base')--}}
@extends('layouts.base_2')

@section('content')
    <div>ホーム＞製品規格</div>



    <div class="row">

        <div class="col-3">
            <div class="mt-3"><h5>製品種別</h5></div>
            <ul class="list-group mt-3" style="max-width: 250px;">
                <button type="button" class="list-group-item list-group-item-action">ローション</button>
                <button type="button" class="list-group-item list-group-item-action">パーソナライズドゲル</button>
                <button type="button" class="list-group-item list-group-item-action">下地</button>
            </ul>
            <div class="text-right">
                <button type="button" class="btn btn-light rounded-circle p-0" style="width:2rem;height:2rem;"
                        data-toggle="modal" data-target="#myModal">＋</button>
            </div>
        </div>
        <div class="col">
            <div class="mt-3 mb-3">
                <div class="row">
                    <div class="col-1">識別</div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label">サンプル</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label">本品</label>
                        </div>
                    </div>
                </div>
            </div>


            <h6 clsss="">資材構成</h6>

            <div class="col-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">資材記号</th>
                        <th scope="col">構成比</th>
                        <th scope="col">仕様</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"> <input type="text" class="form-control form-contro-sm" id="validationDefault03" placeholder="" ></th>
                        <td><input type="text" class="form-control form-control-sm" id="validationDefault03" placeholder="" value="1"></td>
                        <td><input type="text" class="form-control form-control-sm" id="validationDefault03" placeholder="" ></td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="text" class="form-control form-control-sm" id="validationDefault03" placeholder="" ></th>
                        <td><input type="text" class="form-control form-control-sm" id="validationDefault03" placeholder="" value="1"></td>
                        <td><input type="text" class="form-control form-control-sm" id="validationDefault03" placeholder="" ></td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-right">
                    <button type="button" class="btn btn-light rounded-circle p-0" style="width:2rem;height:2rem;"
                            data-toggle="modal" data-target="#myModal2">＋</button>
                </div>
            </div>

        </div>
        <div class="w-100"></div>
    </div>

    <!-- モーダルの設定 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">製品種別追加</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>追加する名称</p>
                    <input type="text" name="add_name" value="">
                    <span id="res"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-primary">変更を保存</button>
                    {{--<button type="button" class="btn btn-primary" onclick="alert('hello'); return false;"--}}
                            {{--data-dismiss="modal">変更を保存2</button>--}}
                    {{--<button type="button" class="btn btn-primary" onclick="alert('hello'); $('#myModal').modal('hide'); return false;"--}}
                            {{-->変更を保存3</button>--}}
                    <button type="button" class="btn btn-primary" id="submit">変更を保存4</button>
                </div><!-- /.modal-footer -->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <script>
        $(function() {
//twitter bootstrap script
            $("button#submit").click(function(){
                $.ajax({
                    type: "POST",
                    url: "/search",
                    // data: $('form.contact').serialize(),
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    // contentType: "application/json; charset=utf-8",
                    // data: '{"username":"' + $("#userNameTextBox").val()
                    //      + '","password":"' + $("#passwordTextBox").val() + '"}',
                    dataType: "json",
                    success: function(msg){
                        // var json = JSON.parse(msg);
                        if (msg.result.status == 500) {
                            alert(msg.result.status);
                        }
                        // $('#res').text(msg.result.message);
                        // var json = JSON.stringify(msg);
                        // alert(json);
                        // $("#thanks").html(msg)
                        // $("#form-content").modal('hide');
                    },
                    error: function(){
                        alert("failure");
                    }
                });
            });
        });
    </script>
    <script>
        $(function(){
            console.log("document ready 10");
        });
        $(document).ready(function(){
            console.log("document ready 3");
        });
        $(function(){
            console.log("document ready 1");
        });
        console.log("インラインコンテンツ 1");
        (function(){
            console.log("document ready 11");
        }());
        console.log("インラインコンテンツ 2");
    </script>
    <script>
        $('#myModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // モーダル切替えボタン
//            var recipient = button.data('whatever') // data-* 属性から情報を抽出
            var recipient = 'あああ'
            // 必要に応じて、ここでAJAXリクエストを開始可能（コールバックで更新することも可能）
            // モーダルの内容を更新。ここではjQueryを使用するが、代わりにデータ・バインディング・ライブラリまたは他のメソッドを使用することも可能
            var modal = $(this)
//            modal.find('.modal-title').text(recipient + 'にメッセージを送る')
//            modal.find('.modal-body input').val(recipient)
            modal.find('.modal-body input').val(recipient)
            console.log("event 1")
        })
    </script>


    <!-- モーダルの設定２ -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">資材構成追加</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>追加する資材構成</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-primary">変更を保存</button>
                </div><!-- /.modal-footer -->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection('content)


