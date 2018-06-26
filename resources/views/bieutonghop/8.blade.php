@extends('layouts.main')

@section('content')
                <div id="div_Body" style="z-index: 100; padding:20px 10px 10px 10px;  margin-top: 30px;">


                    <style type="text/css">
                        .CNNV_NoLeftBorder {
                            border-style: solid;
                            border-width: 1px 1px 1px 0px;
                            border-color: #c0c0c0;
                            font-family: Tahoma, Arial, Times New Roman;
                            font-size: 11px;
                            color: #333333;
                            /* padding: 0px 5px 0px 0px; */
                            /* text-align: right; */
                            vertical-align: middle;
                        }

                        .CNNV_NoRightBorder {
                            border-style: solid;
                            border-width: 1px 0px 1px 1px;
                            border-color: #c0c0c0;
                            font-family: Tahoma, Arial, Times New Roman;
                            font-size: 11px;
                            color: #333333;
                            padding: 5px;
                            text-align: left;
                            vertical-align: middle;
                            font-weight: bold;
                        }

                        .CNNV_NoRightBorder a {
                            color: #333333;
                            text-decoration: none;
                        }
                    </style>
                    <style type="text/css">
                        .Initial {
                            display: block;
                            padding: 8px 20px 8px 8px;
                            margin-bottom: 3px;
                            float: left;
                            background: url("/image/init_bg2.png") no-repeat right top;
                            color: #ffffff;
                            font-weight: bold;
                        }

                        .Initial:hover {
                            color: White;
                            background: url("/image/HoverButton.png") repeat-x right top;
                            margin: 0px 0px 0px 0px;
                            padding: 8px 20px 8px 8px;
                            color: Black;
                        }

                        .Clicked {
                            float: left;
                            display: block;
                            background: url("/image/SelectedButton.png") repeat-x right top;
                            padding: 8px 20px 8px 8px;
                            color: Black;
                            font-weight: bold;
                            color: White;
                        }

                        .style1 {
                            width: 86px;
                        }
                    </style>
                    <div style="height: 5px; width: 100%">
                    </div>
                    <div class="liketab">
                        <div class="itemHeader">
                            <div class="active">
                                <span>
                <img src="/image/kvr.gif" />
                BÁO CÁO THỐNG KÊ TỔNG HỢP
            </span>
                            </div>
                        </div>
                        <div class="groupItem">
                            <table style="width: 100%">

                            </table>
                            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                <tr>
                                    <td align="left" valign="top">
                                        <div align="left">
                                            <form method="POST" action="/thongketonghop/{{$bieu->year}}">
                    {{csrf_field()}}
                <input type="hidden" name="year" value="{{$bieu->year}}">
                <input type="submit" name="1" value="Biểu 01" id="ctl00_ContentPlaceHolder1_ctl00_Tab1" title="Biểu 01/TKTH-KHCN-ĐP: Số tổ chức có hoạt động khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="2" value="Biểu 02" id="ctl00_ContentPlaceHolder1_ctl00_Tab2" title="Biểu 02/TKTH-KHCN-ĐP: Nhân lực hoạt động khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="3" value="Biểu 03" id="ctl00_ContentPlaceHolder1_ctl00_Tab3" title="Biểu 03/TKTH-KHCN-ĐP: Chi cho khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="4" value="Biểu 04" id="ctl00_ContentPlaceHolder1_ctl00_Tab4" title="Biểu 04/TKTH-KHCN-ĐP: Nhiệm vụ khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="5" value="Biểu 05" id="ctl00_ContentPlaceHolder1_ctl00_Tab5" title="Biểu 05/TKTH-KHCN-ĐP: Hợp tác quốc tế trong hoạt động khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="6" value="Biểu 06" id="ctl00_ContentPlaceHolder1_ctl00_Tab6" title="Biểu 06/TKTH-KHCN-ĐP: Giải thưởng khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="7" value="Biểu 07" id="ctl00_ContentPlaceHolder1_ctl00_Tab7" title="Biểu 07/TKTH-KHCN-ĐP: Hoạt động đánh giá, thẩm định, giám định, ứng dụng và phát triển công nghệ tại địa phương" class="Initial" style="border-style:None;" />
                <input type="submit" name="8" value="Biểu 08" id="ctl00_ContentPlaceHolder1_ctl00_Tab8" title="Biểu 08/TKTH-KHCN-ĐP: Tiêu chuẩn đo lường chất lượng" class="Clicked" style="border-style:None;" />
                <input type="submit" name="9" value="Biểu 09" id="ctl00_ContentPlaceHolder1_ctl00_Tab9" title="Biểu 09/TKTH-KHCN-ĐP: Năng lượng nguyên tử, an toàn bức xạ và hạt nhân" class="Initial" style="border-style:None;" />
                <input type="submit" name="10" value="Biểu 10" id="ctl00_ContentPlaceHolder1_ctl00_Tab10" title="Biểu 10/TKTH-KHCN-ĐP: Thanh tra khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="11" value="Biểu 11" id="ctl00_ContentPlaceHolder1_ctl00_Tab11" title="Biểu 11/TKTH-KHCN-ĐP: Doanh nghiệp và thị trường khoa học và công nghệ" class="Initial" style="border-style:None;" />
                </form>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <span id="ctl00_ContentPlaceHolder1_ctl00_lblBangDuLieu">
<style type="text/css">
    .style3
    {
        width: 215px;
    }
    </style>
    <form role="form" method="POST" action="{{ url('/bieutonghop8/'.$bieu->id.'/year') }}">
                {{ csrf_field() }}

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td style="padding: 0px 0px 10px 10px;" valign="top" align="left">
            
            <table style="width: 100%; border-spacing: 0px; border: 0px;">
                <tr>
                    <td style="width: 200px">
                        <b> Biểu 08/TKTH-KHCN-ĐP</b>
                        <br />
                        26/2015/TT-BKHCN</td>
                    <td align="left">
                       <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; TIÊU CHUẨN, ĐO LƯỜNG, CHẤT LƯỢNG</b>
                        <br />
                        
                    </td>
                    <td align="right" style="width: 200px">
                        <select name="year" onchange="this.form.submit();">
    @foreach($years as $y)
    <option @if($bieu->reporter_year == $y) selected="selected" @endif value="{{$y}}">{{$y}}</option>
    @endforeach
    </select>
                    </td>
                </tr>
            </table>
            <form role="form" method="POST" action="{{ url('/generate/tonghop/bieu/8/'.$bieu->id) }}">
                {{ csrf_field() }}
            <table>
            <tr>
                <td style="vertical-align: top; text-align: left" class="style3">
                    Ngày gửi báo cáo
                </td>
                <td align="middle" style="border-style:none; border-width:0px; height: 20px;"><div class="input-group">
    <div class="input-group-addon">
      <i class="fa fa-calendar"></i>
    </div>
    <input name="publish_day" value="{{date('d/m/Y', strtotime($bieu->publish_day))}}"  type="text" class="form-control datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
    {!! $errors->first('publish_day', '<p class="help-block">:message</p>') !!}
  </div>
                </td>
            </tr>
            <tr>
                    <td align="left" style="padding-right: 5px;" class="style3">
                        <strong>Đơn vị báo cáo</strong>
                    </td>
                    <td style="vertical-align: top; text-align: left">
                        <select name="reporter" style="width:279px;">
    <option selected="selected" value="1">Sở KH&amp;CN Bắc Giang</option>

</select>
                    </td>
                </tr>
                <tr>
                    <td align="left" style="padding-right: 5px" class="style3">
                        <strong>Đơn vị nhận báo cáo</strong>
                    </td>
                    <td style="height: 24px; text-align: left">
                        <select name="receiver" style="width:279px;">
    <option value="1">Cục Th&#244;ng tin KH&amp;CN Quốc gia</option>
    <option value="2">Sở KH&amp;CN tỉnh,tp.trực thuộc TƯ</option>
    <option value="3">Bộ/ng&#224;nh chủ quản</option>

</select>
                    </td>
                </tr>
        </table>
            
            <br />
            <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_Label1"><table id="ctl00_ContentPlaceHolder1_ctl00_ctl00_tbl2" cellspacing="0" cellpadding="0" border="0" style="background-color:White;width:100%;border-collapse:collapse;">
	<tr>
		<td class="Table_Header" rowspan="1" style="width:200px;"></td><td class="Table_Header" rowspan="1" style="width:50px;">Mã số</td><td class="Table_Header" rowspan="1" style="width:50px;">Đơn vị tính</td><td class="Table_Header" rowspan="1" style="width:50px;">Tổng cộng</td><td class="Table_Header" rowspan="1">Trong kỳ báo cáo</td>
	</tr><tr>
		<td class="KH_ThuTuCot_Mau01" colspan="1">A</td><td class="KH_ThuTuCot_Mau01" colspan="1">B</td><td class="KH_ThuTuCot_Mau01" colspan="1">C</td><td class="KH_ThuTuCot_Mau01" colspan="1">1</td><td class="KH_ThuTuCot_Mau01" colspan="1">2</td>
	</tr>@php
$s = parse_str($bieu->field_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>1. SỐ QUY CHUẨN KỸ THUẬT ĐỊA PHƯƠNG ĐƯỢC BAN HÀNH</b></td>
    <td class="TableCell_Center" colspan="1">01</td>
    <td class="TableCell_Center" colspan="1"><i>Quy chuẩn</i></td>
      {{$out[1]}}
    <td class="TableCell_Center" rowspan="1" style="width:40px;"></td>
      {{$out[2]}}
    <td class="TableCell_Center" rowspan="1" style="width:50px;"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>Chia theo loại quy chuẩn</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->field_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Quy chuẩn kỹ thuật chung</td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td class="TableCell_Center" colspan="1"><i>Quy chuẩn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Quy chuẩn kỹ thuật an toàn</td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td class="TableCell_Center" colspan="1"><i>Quy chuẩn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Quy chuẩn kỹ thuật môi trường</td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td class="TableCell_Center" colspan="1"><i>Quy chuẩn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Quy chuẩn kỹ thuật quá trình</td>
    <td class="TableCell_Center" colspan="1">05</td>
    <td class="TableCell_Center" colspan="1"><i>Quy chuẩn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Quy chuẩn kỹ thuật dịch vụ</td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td class="TableCell_Center" colspan="1"><i>Quy chuẩn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
@php
$s = parse_str($bieu->field_7, $out);
@endphp
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2. SỐ TỔ CHỨC KIỂM ĐỊNH PHƯƠNG TIỆN ĐO </b></td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td class="TableCell_Center" colspan="1"><i>Tổ chức</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}>
    </td>
</tr>
@php
$s = parse_str($bieu->field_8, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>3. SỐ PHƯƠNG TIỆN ĐO ĐƯỢC KIỂM ĐỊNH</b></td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>Chia theo loại phương tiện đo</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->field_9, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Độ dài</td>
    <td class="TableCell_Center" colspan="1">09</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu->field_10, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khối lượng</td>
    <td class="TableCell_Center" colspan="1">10</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu->field_11, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Dung tích - Lưu lượng</td>
    <td class="TableCell_Center" colspan="1">11</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu->field_12, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Áp suất</td>
    <td class="TableCell_Center" colspan="1">12</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu->field_13, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nhiệt độ</td>
    <td class="TableCell_Center" colspan="1">13</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_14, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Hoá lý</td>
    <td class="TableCell_Center" colspan="1">14</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_15, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Điện - Điện tử</td>
    <td class="TableCell_Center" colspan="1">15</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu->field_16, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Thời gian - Tần số - Âm thanh</td>
    <td class="TableCell_Center" colspan="1">16</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu->field_17, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>4. SỐ GIẤY CHỨNG NHẬN VỀ HỆ THỐNG QUẢN LÝ CẤP CHO TỔ CHỨC, DOANH NGHIỆP</b></td>
    <td class="TableCell_Center" colspan="1">17</td>
    <td class="TableCell_Center" colspan="1"><i>Giấy chứng nhận</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_18, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cơ quan quản lý nhà nước</td>
    <td class="TableCell_Center" colspan="1">18</td>
    <td class="TableCell_Center" colspan="1"><i>Giấy chứng nhận</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_19, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Các cơ quan, doanh nghiệp và tổ chức khác</td>
    <td class="TableCell_Center" colspan="1">19</td>
    <td class="TableCell_Center" colspan="1"><i>Giấy chứng nhận</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_20, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>5. SỐ PHÒNG THỬ NGHIỆM, HIỆU CHUẨN ĐƯỢC CÔNG NHẬN</b></td>
    <td class="TableCell_Center" colspan="1">20</td>
    <td class="TableCell_Center" colspan="1"><i>Phòng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_21, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>6. SỐ TỔ CHỨC ĐÁNH GIÁ SỰ PHÙ HỢP ĐĂNG KÝ HOẠT ĐỘNG</b></td>
    <td class="TableCell_Center" colspan="1">21</td>
    <td class="TableCell_Center" colspan="1"><i>Tổ chức</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
</table></span>
                            <br />
                            <div style="height: 5px;
                width: 100%">
                            </div>

                            <div style="height: 25px; text-align:center; width: 100%">
     <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$ctl00$btnIn" value="Xuất in" id="ctl00_ContentPlaceHolder1_ctl00_ctl00_btnIn" class="button">
                            </div>
                            </td>
                            </tr>
                            </table>

                            </span>
                        </div>
                    </div>

                </div>
@endsection @section('js')
<script src="/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script type="text/javascript">
    $(function() {
        //Initialize Select2 Elements
        $('.datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Money Euro
    });
</script>

@endsection