<div id="main_left" class="col-md-2" style="width:11.666667%;background-color: rgb(147, 207, 162, 0.3);">
    <div class="contanier" style="opacity: 1;">
        <ul class="list-unstyled">
            <li style="margin-top: 25px;font-size: 15px;">
                <p style="color: black;letter-spacing: 7px;text-decoration: none;">客戶資料</p>
                <ul style="list-style: none;padding-left: 20px;">
                    <li>
                        <a style="color:black;" href="{{ url('customergroup') }}">群組簡訊</a>
                    </li>
                    <li>
                        <a style="color:black;" href="{{ url('customertimersms') }}">預約發送</a>
                    </li>
                </ul>
            </li>
            <li style="margin-top: 15px;font-size: 15px;">
                <p style="color: black;letter-spacing: 7px;text-decoration: none;">電商網站</p>
                <ul style="list-style: none;padding-left: 20px;">
                    <li>
                        <a style="color:black;" href="#">數據中心</a>
                    </li>
                    <li>
                        <a style="color:black;" href="#">交易記錄</a>
                    </li>
                    <li>
                        <a style="color:black;" href="{{ url('Online') }}">首頁設定</a>
                    </li>
                    <li>
                        <a style="color:black;" href="{{ url('onlinearticle') }}">文章設定</a>
                    </li>
                    <li>
                        <a style="color:black;" href="#">課程設定</a>
                    </li>
                    <li>
                        <a style="color:black;" href="#">商品設定</a>
                    </li>
                    <li>
                        <a style="color:black;" href="{{ url('friend') }}">朋友肯定</a>
                    </li>
                    <li>
                        <a style="color:black;" href="{{ url('onlinenew') }}">新聞設定</a>
                    </li>
                </ul>
            </li>
            <li style="margin-top: 15px;font-size: 15px;">
                <a style="color: black;letter-spacing: 7px;text-decoration: none;" href="#">綠寵物App</a>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
    $("#main_left").css({ "min-height" : ($( window ).height() - 55) });
</script>
<style>
    li {
       margin-bottom: 5px;
    }
</style>
