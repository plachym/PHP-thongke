@extends('layouts.main')

@section('content')    
            <div id="div_Body" style="z-index: 100; padding:20px 10px 10px 10px;  margin-top: 30px;">
           

<style type="text/css">
    .CNNV_NoLeftBorder{border-style: solid;
border-width: 1px 1px 1px 0px;
border-color: #c0c0c0;
font-family: Tahoma,Arial,Times New Roman;
font-size: 11px;
color: #333333;
/* padding: 0px 5px 0px 0px; */
/* text-align: right; */
vertical-align: middle;}
.CNNV_NoRightBorder {
border-style: solid;
border-width: 1px 0px 1px 1px;
border-color: #c0c0c0;
font-family: Tahoma,Arial,Times New Roman;
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
    .Initial
    {
        display: block;
        padding: 8px 20px 8px 8px;
        margin-bottom: 3px;
        float: left;
        background: url("/thongkekhcn/Images/init_bg2.png") no-repeat right top;
        color: #ffffff;
        font-weight: bold;
    }
    .Initial:hover
    {
        color: White;
        background: url("../Images/HoverButton.png") repeat-x right top;
        margin: 0px 0px 0px 0px;
        padding: 8px 20px 8px 8px;
        color: Black;
    }
    .Clicked
    {
        float: left;
        display: block;
        background: url("../Images/SelectedButton.png") repeat-x right top;
        padding: 8px 20px 8px 8px;
        color: Black;
        font-weight: bold;
        color: White;
    }
    .style1
    {
        width: 86px;
    }
</style>
<div style="height: 5px; width: 100%">
</div>
<div class="liketab">
    <div class="itemHeader">
        <div class="active">
            <span>
                <img src="/thongkekhcn/Images/kvr.gif" />
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
                 <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$Tab1" value="Biểu 01" id="ctl00_ContentPlaceHolder1_ctl00_Tab1" title="Biểu 01/TKTH-KHCN-ĐP: Số tổ chức có hoạt động khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$Tab2" value="Biểu 02" id="ctl00_ContentPlaceHolder1_ctl00_Tab2" title="Biểu 02/TKTH-KHCN-ĐP: Nhân lực hoạt động khoa học và công nghệ" class="Clicked" style="border-style:None;" />
                <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$Tab3" value="Biểu 03" id="ctl00_ContentPlaceHolder1_ctl00_Tab3" title="Biểu 03/TKTH-KHCN-ĐP: Chi cho khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$Tab4" value="Biểu 04" id="ctl00_ContentPlaceHolder1_ctl00_Tab4" title="Biểu 04/TKTH-KHCN-ĐP: Nhiệm vụ khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$Tab5" value="Biểu 05" id="ctl00_ContentPlaceHolder1_ctl00_Tab5" title="Biểu 05/TKTH-KHCN-ĐP: Hợp tác quốc tế trong hoạt động khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$Tab6" value="Biểu 06" id="ctl00_ContentPlaceHolder1_ctl00_Tab6" title="Biểu 06/TKTH-KHCN-ĐP: Giải thưởng khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$Tab7" value="Biểu 07" id="ctl00_ContentPlaceHolder1_ctl00_Tab7" title="Biểu 07/TKTH-KHCN-ĐP: Hoạt động đánh giá, thẩm định, giám định, ứng dụng và phát triển công nghệ tại địa phương" class="Initial" style="border-style:None;" />
                <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$Tab8" value="Biểu 08" id="ctl00_ContentPlaceHolder1_ctl00_Tab8" title="Biểu 08/TKTH-KHCN-ĐP: Tiêu chuẩn đo lường chất lượng" class="Initial" style="border-style:None;" />
                <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$Tab9" value="Biểu 09" id="ctl00_ContentPlaceHolder1_ctl00_Tab9" title="Biểu 09/TKTH-KHCN-ĐP: Năng lượng nguyên tử, an toàn bức xạ và hạt nhân" class="Initial" style="border-style:None;" />
                <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$Tab10" value="Biểu 10" id="ctl00_ContentPlaceHolder1_ctl00_Tab10" title="Biểu 10/TKTH-KHCN-ĐP: Thanh tra khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$Tab11" value="Biểu 11" id="ctl00_ContentPlaceHolder1_ctl00_Tab11" title="Biểu 11/TKTH-KHCN-ĐP: Doanh nghiệp và thị trường khoa học và công nghệ" class="Initial" style="border-style:None;" />
            </div>
        </td>
    </tr>
</table>
<span id="ctl00_ContentPlaceHolder1_ctl00_lblBangDuLieu">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td style="padding: 0px 0px 10px 10px;" valign="top" align="left">
            <table style="width: 100%; border-spacing: 0px; border: 0px;">
                <tr>
                    <td style="width: 200px">
                        <b>Biểu 02/TKTH-KHCN-ĐP</b>
                        <br />
                        26/2015/TT-BKHCN
                    </td>
                    <td align="left">
                        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            NHÂN LỰC HOẠT ĐỘNG KHOA HỌC VÀ CÔNG NGHỆ
                            <br />
                    </td>
                    <td align="right" style="width: 200px">
                        <select name="ctl00$ContentPlaceHolder1$ctl00$ctl00$drpNam" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$ctl00$ctl00$drpNam\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_ContentPlaceHolder1_ctl00_ctl00_drpNam">
	<option selected="selected" value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>

</select>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td align="left" style="padding-right: 5px;" class="style3">
                        <strong>Đơn vị báo cáo</strong>
                    </td>
                    <td style="vertical-align: top; text-align: left">
                        <select name="ctl00$ContentPlaceHolder1$ctl00$ctl00$drpDonVi" id="ctl00_ContentPlaceHolder1_ctl00_ctl00_drpDonVi" style="width:279px;">
	<option selected="selected" value="1">Sở KH&amp;CN Quảng Trị</option>

</select>
                    </td>
                </tr>
                <tr>
                    <td align="left" style="padding-right: 5px" class="style3">
                        <strong>Đơn vị nhận báo cáo</strong>
                    </td>
                    <td style="height: 24px; text-align: left">
                        <select name="ctl00$ContentPlaceHolder1$ctl00$ctl00$drpDonViNhanBaoCao" id="ctl00_ContentPlaceHolder1_ctl00_ctl00_drpDonViNhanBaoCao" style="width:279px;">
	<option value="1">Cục Th&#244;ng tin KH&amp;CN Quốc gia</option>
	<option value="2">Sở KH&amp;CN tỉnh,tp.trực thuộc TƯ</option>
	<option value="3">Bộ/ng&#224;nh chủ quản</option>

</select>
                    </td>
                </tr>
            </table>
            <table style="width: 100%; border-spacing: 0px; border: 0px;">
                <tr>
                    <td style="width: 200px">
                    </td>
                    <td align="left">
                    </td>
                    <td align="right" style="width: 200px">
                        <i>Đơn vị tính: Người</i>
                    </td>
                </tr>
            </table>
            <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblBangDuLieu"><table id="ctl00_ContentPlaceHolder1_ctl00_ctl00_tbl" cellspacing="0" cellpadding="0" border="0" style="background-color:White;width:100%;border-collapse:collapse;">
	<tr>
		<td class="Table_Header" rowspan="2" style="width:250px;"></td><td class="Table_Header" rowspan="2" style="width:50px;">Mã số</td><td class="Table_Header" rowspan="2" style="width:50px;">Tổng số</td><td class="Table_Header" colspan="6" rowspan="1">Chia theo trình độ chuyên môn</td><td class="Table_Header" colspan="2" rowspan="1">Chức danh </td>
	</tr><tr>
		<td class="Table_Header" rowspan="1">Tiến sỹ</td><td class="Table_Header" rowspan="1">Thạc sỹ</td><td class="Table_Header" rowspan="1">Đại học</td><td class="Table_Header" rowspan="1">Cao đẳng</td><td class="Table_Header" rowspan="1">Trung cấp</td><td class="Table_Header" rowspan="1">Khác</td><td class="Table_Header" rowspan="1">Giáo sư</td><td class="Table_Header" rowspan="1">Phó Giáo sư</td>
	</tr><tr>
		<td class="KH_ThuTuCot_Mau01" colspan="1">A</td><td class="KH_ThuTuCot_Mau01" colspan="1">B</td><td class="KH_ThuTuCot_Mau01" colspan="1">1</td><td class="KH_ThuTuCot_Mau01" colspan="1">2</td><td class="KH_ThuTuCot_Mau01" colspan="1">3</td><td class="KH_ThuTuCot_Mau01" colspan="1">4</td><td class="KH_ThuTuCot_Mau01" colspan="1">5</td><td class="KH_ThuTuCot_Mau01" colspan="1">6</td><td class="KH_ThuTuCot_Mau01" colspan="1">7</td><td class="KH_ThuTuCot_Mau01" colspan="1">8</td><td class="KH_ThuTuCot_Mau01" colspan="1">9</td>
	</tr><tr>
		<td class="TableCell" colspan="1"><b>TỔNG SỐ</b></td><td class="TableCell_Center" colspan="1">01</td><td class="TableCell_Center" rowspan="1" style="width:50px;">622</td><td class="TableCell_Center" rowspan="1">11</td><td class="TableCell_Center" rowspan="1">96</td><td class="TableCell_Center" rowspan="1">379</td><td class="TableCell_Center" rowspan="1">40</td><td class="TableCell_Center" rowspan="1">85</td><td class="TableCell_Center" rowspan="1">11</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1"><i>Trong đó số Nữ</i></td><td class="TableCell_Center" colspan="1">02</td><td class="TableCell_Center" rowspan="1" style="width:50px;">277</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1">31</td><td class="TableCell_Center" rowspan="1">156</td><td class="TableCell_Center" rowspan="1">26</td><td class="TableCell_Center" rowspan="1">62</td><td class="TableCell_Center" rowspan="1">2</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1"><b>1. CHIA THEO LOẠI HÌNH KINH TẾ</b></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">1.1. Nhà nước</td><td class="TableCell_Center" colspan="1">03</td><td class="TableCell_Center" rowspan="1">622</td><td class="TableCell_Center" rowspan="1">11</td><td class="TableCell_Center" rowspan="1">96</td><td class="TableCell_Center" rowspan="1">379</td><td class="TableCell_Center" rowspan="1">40</td><td class="TableCell_Center" rowspan="1">85</td><td class="TableCell_Center" rowspan="1">11</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">1.2. Ngoài nhà nước</td><td class="TableCell_Center" colspan="1">04</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">1.4. Có vốn đầu tư nước ngoài</td><td class="TableCell_Center" colspan="1">05</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1"><b>2. CHIA THEO LOẠI HÌNH TỔ CHỨC</b></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td><td class="TableCell" colspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">2.1. Cơ quan quản lý nhà nước</td><td class="TableCell_Center" colspan="1">06</td><td class="TableCell_Center" rowspan="1">176</td><td class="TableCell_Center" rowspan="1">5</td><td class="TableCell_Center" rowspan="1">37</td><td class="TableCell_Center" rowspan="1">127</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1">6</td><td class="TableCell_Center" rowspan="1">1</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">2.2. Tổ chức nghiên cứu khoa học và phát triển công nghệ</td><td class="TableCell_Center" colspan="1">07</td><td class="TableCell_Center" rowspan="1">22</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1">4</td><td class="TableCell_Center" rowspan="1">14</td><td class="TableCell_Center" rowspan="1">1</td><td class="TableCell_Center" rowspan="1">1</td><td class="TableCell_Center" rowspan="1">2</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">2.3. Cơ sở giáo dục đại học</td><td class="TableCell_Center" colspan="1">08</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">2.4. Tổ chức dịch vụ KH&CN</td><td class="TableCell_Center" colspan="1">09</td><td class="TableCell_Center" rowspan="1">37</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1">28</td><td class="TableCell_Center" rowspan="1">6</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1">3</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">2.5. Đơn vị sự nghiệp khác </td><td class="TableCell_Center" colspan="1">10</td><td class="TableCell_Center" rowspan="1">387</td><td class="TableCell_Center" rowspan="1">6</td><td class="TableCell_Center" rowspan="1">55</td><td class="TableCell_Center" rowspan="1">210</td><td class="TableCell_Center" rowspan="1">33</td><td class="TableCell_Center" rowspan="1">78</td><td class="TableCell_Center" rowspan="1">5</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">2.6. Doanh nghiệp KH&CN</td><td class="TableCell_Center" colspan="1">11</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">2.7.  Doanh nghiệp</td><td class="TableCell_Center" colspan="1">12</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1"><b>3. CHIA THEO QUỐC TỊCH</b></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">3.1. Người Việt Nam</td><td class="TableCell_Center" colspan="1">13</td><td class="TableCell_Center" rowspan="1">622</td><td class="TableCell_Center" rowspan="1">11</td><td class="TableCell_Center" rowspan="1">96</td><td class="TableCell_Center" rowspan="1">379</td><td class="TableCell_Center" rowspan="1">40</td><td class="TableCell_Center" rowspan="1">85</td><td class="TableCell_Center" rowspan="1">11</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1"><i>- Dân tộc Kinh</i></td><td class="TableCell_Center" colspan="1">14</td><td class="TableCell_Center" rowspan="1">620</td><td class="TableCell_Center" rowspan="1">11</td><td class="TableCell_Center" rowspan="1">96</td><td class="TableCell_Center" rowspan="1">379</td><td class="TableCell_Center" rowspan="1">38</td><td class="TableCell_Center" rowspan="1">85</td><td class="TableCell_Center" rowspan="1">11</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1"><i>- Dân tộc thiểu số</i></td><td class="TableCell_Center" colspan="1">15</td><td class="TableCell_Center" rowspan="1">2</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1">2</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">3.2. Người nước ngoài</td><td class="TableCell_Center" colspan="1">16</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1"><b>4. CHIA THEO LĨNH VỰC ĐÀO TẠO</b></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td><td class="TableCell_Center" colspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">4.1. Khoa học tự nhiên</td><td class="TableCell_Center" colspan="1">17</td><td class="TableCell_Center" rowspan="1">74</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1">8</td><td class="TableCell_Center" rowspan="1">64</td><td class="TableCell_Center" rowspan="1">1</td><td class="TableCell_Center" rowspan="1">1</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">4.2. Khoa học kỹ thuật và công nghệ</td><td class="TableCell_Center" colspan="1">18</td><td class="TableCell_Center" rowspan="1">40</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1">4</td><td class="TableCell_Center" rowspan="1">29</td><td class="TableCell_Center" rowspan="1">5</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1">1</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">4.3. Khoa học y, dược</td><td class="TableCell_Center" colspan="1">19</td><td class="TableCell_Center" rowspan="1">315</td><td class="TableCell_Center" rowspan="1">8</td><td class="TableCell_Center" rowspan="1">37</td><td class="TableCell_Center" rowspan="1">177</td><td class="TableCell_Center" rowspan="1">32</td><td class="TableCell_Center" rowspan="1">58</td><td class="TableCell_Center" rowspan="1">4</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">4.4. Khoa học nông nghiệp</td><td class="TableCell_Center" colspan="1">20</td><td class="TableCell_Center" rowspan="1">31</td><td class="TableCell_Center" rowspan="1">1</td><td class="TableCell_Center" rowspan="1">9</td><td class="TableCell_Center" rowspan="1">18</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1">3</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">4.5. Khoa học xã hội</td><td class="TableCell_Center" colspan="1">21</td><td class="TableCell_Center" rowspan="1">105</td><td class="TableCell_Center" rowspan="1">2</td><td class="TableCell_Center" rowspan="1">32</td><td class="TableCell_Center" rowspan="1">69</td><td class="TableCell_Center" rowspan="1">2</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">4.6. Khoa học nhân văn</td><td class="TableCell_Center" colspan="1">22</td><td class="TableCell_Center" rowspan="1">12</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1">2</td><td class="TableCell_Center" rowspan="1">10</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr><tr>
		<td class="TableCell" colspan="1">4.7. Khác</td><td class="TableCell_Center" colspan="1">23</td><td class="TableCell_Center" rowspan="1">45</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1">4</td><td class="TableCell_Center" rowspan="1">12</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1">23</td><td class="TableCell_Center" rowspan="1">6</td><td class="TableCell_Center" rowspan="1"></td><td class="TableCell_Center" rowspan="1"></td>
	</tr>
</table></span>
            
            <br />
            <div style="height: 40px; text-align: center; width: 100%">
                
                <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$ctl00$Button1" value="Xuất in" id="ctl00_ContentPlaceHolder1_ctl00_ctl00_Button1" class="button" />
            </div>
        </td>
    </tr>
</table>
</span>
</div>
</div>

            </div>
@endsection