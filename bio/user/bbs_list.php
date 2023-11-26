<html><head>
<meta http-equiv="Content-Language" content="ko">
<meta http-equiv="Content-Type" content="text/html; charset=ks_c_5601-1987">
<link rel="shortcut icon" href="/admin/img/icon.png">
<link rel="stylesheet" type="text/css" href="/inc/style.css">
<script language="javascript" src="/inc/TagScript.js"></script>
<script type="text/javascript" src="/inc/calendar.js"></script><style>.calendar {background:buttonface;padding:5;border:1 solid buttonshadow;width:160;display:none;position: absolute;z-index: 99;}.celDate {background:white;cursor:Hand;border:1px solid white;}</style></head><body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0"><div id="minical" oncontextmenu="return false" ondragstart="return false" onselectstart="return false" class="calendar"></div>
<script type="text/javascript" src="/inc/innolComm.js"></script>
<script src="/inc/cals.js"></script>

<script src="/inc/common.js"></script>
<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>


<script language="javascript">
<!--
//오른족 마우스 사용여부
document.oncontextmenu =new Function ("return false");
document.ondragstart = new Function ("return false"); 
document.onselectstart = new Function ("return false");
-->
</script>


<script language="JavaScript">
<!--
    var firstday = new Date();
    
    var strMonth = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];

    function getFullToday() {
        var txtday = "";
        
        var setday = new Date();
        var nowday = new Date();
        // var newday = new Date(nowday.getFullYear(), nowday.getMonth(), nowday.getDate(), nowday.getHours()-8, nowday.getMinutes(), nowday.getSeconds());	// 런던타임
		var newday = new Date(nowday.getFullYear(), nowday.getMonth(), nowday.getDate(), nowday.getHours(), nowday.getMinutes(), nowday.getSeconds());	

        var aday = nowday - firstday;
        var bday = newday.getTime();

        kday = bday + aday;

        newday.setTime(bday);

        newday_yy   = newday.getFullYear();
        newday_mm   = newday.getMonth();
        newday_dd   = newday.getDate();
        newday_h    = newday.getHours();
        newday_m    = newday.getMinutes();
        newday_s    = newday.getSeconds();
		
        newday_dd   = newday_dd < 10 ? "0" + newday_dd : newday_dd;
        newday_h    = newday_h < 10 ? "0" + newday_h : newday_h;
        newday_m    = newday_m < 10 ? "0" + newday_m : newday_m;
        newday_s    = newday_s < 10 ? "0" + newday_s : newday_s;

//      txtday = strMonth[newday_mm]+','+newday_dd+'/'+newday_yy+'/'+newday_h+':'+newday_m+':'+newday_s;
//		2009년 02월 21일 오전 2시 49분
		newday_mm1 = newday_mm + 1;
		txtday = newday_yy+'년 '+newday_mm1+'월 '+newday_dd+'일 '+newday_h+'시 '+newday_m+'분 ' + newday_s+'초';

        return txtday;
    }

    function putsTime() {
        if(typeof(document.all.srvTime) == "object" ) {
            document.all.srvTime.innerHTML = getFullToday();
        }

        setTimeout("putsTime()", 1000);
    }

    putsTime();
//-->
</script>





<!--align table start-->
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
	<tbody><tr>
		<td valign="top">
		
		<!--whole table start-->
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tbody><tr>
				<td bgcolor="#c0444f" height="4"></td>
			</tr>
			<tr>
				<td>
				
				<!--center table start-->
				<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="920">
					<tbody><tr>
						<td>

										
						<!--top table start-->
						<div align="right">
						<table border="0" cellpadding="0" cellspacing="0" width="136">
							<tbody><tr>
								<td><img border="0" src="/admin/img/t01.gif" width="10" height="26"></td>
								<!--home 버튼-->
								<td><a href="/user/bbs_list.php?code=notice" onfocus="this.blur();"><img border="0" src="/admin/img/t03.gif" width="52" height="26"></a></td>
								<!--logout 버튼-->
								<td><a href="/admin/logout.htm" onfocus="this.blur();"><img border="0" src="/admin/img/t04.gif" width="64" height="26"></a></td>
								<td><img border="0" src="/admin/img/t02.gif" width="10" height="26"></td>
							</tr>
						</tbody></table>
						</div>
						<!--top table end-->
				
						</td>
					</tr>
					<tr>
						<td>
						
						<!--logo table start-->
						<table border="0" cellpadding="0" cellspacing="0" width="1020">
							<tbody><tr>
								<td width="450"><img border="0" src="/admin/img/logo_user.gif"></td>
								<td>
								<img border="0" src="/admin/img/t05.gif" width="13" height="13"> </td>
								<td><font color="#c0444f"><div id="srvTime">2023년 11월 26일 15시 25분 17초</div></font></td>
								<td>
								<font color="#191919"><b>권다은(레벨:<font color="#00cc00">레벨2</font>)</b>님 반갑습니다.</font>
								</td>
							</tr>


							

							<tr><td colspan="4" align="right"><b><font color="#0000ff"><!-- TP(누적포인트) : 0P --> CP(출금가능금액) :  -365,000P</font><!-- &nbsp;&nbsp;<font color=#9933cc> 적립금액 :  -942,000 P --></b>  </td></tr>

							  <tr height="25"><td colspan="4" align="center"><b><font size="3" color="#ff0000">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&nbsp;&nbsp;&nbsp;&nbsp;   수당 지급중지중 !!!   &nbsp;&nbsp;&nbsp;&nbsp; &lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;</font></b></td></tr>							
							<!-- <tr><td></td><td colspan=2><font color=#669900>우수조합원 : 0:0:0 명 &nbsp;/&nbsp; 일반조합원 : 0:0:0 명</font></td></tr> -->
						</tbody></table>
						<!--logo table end-->
						
						</td>
					</tr>
					 <tr>
						<td height="12" align="center">　
												</td>
					</tr> 
					</tbody></table>
				</div>
				<!--center table end-->
				
				</td>
			</tr>
			<tr>
				<td background="/admin/img/bg01.gif" height="66" valign="top">
				
				<!--menu table start-->
				<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="920">
					<tbody><tr>
						<!--menu01 button-->
						<td width="145"><a href="#" onfocus="this.blur()" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image01','','/admin/img/m01_r.gif',1);javascript:show_wrap(1)"><img src="http://xn--9g3b19fd2bz2e80b.com/admin/img/m01.gif" name="Image01" width="145" height="40" border="0"></a></td>
						<!--menu01 button-->
						<td width="145"><a href="#" onfocus="this.blur()" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image06','','/admin/img/m06_r.gif',1);javascript:show_wrap(2)"><img src="http://xn--9g3b19fd2bz2e80b.com/admin/img/m06.gif" name="Image06" width="145" height="40" border="0"></a></td>
						<!--menu10 button-->
						<td width="145"><a href="#" onfocus="this.blur()" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','/admin/img/m14_r.gif',1);javascript:show_wrap(3)"><img src="/admin/img/m14.gif" name="Image10" width="145" height="40" border="0"></a></td>
						<!--menu09 button-->
						<td width="145"><a href="#" onfocus="this.blur()" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image09','','/admin/img/m09_r.gif',1);javascript:show_wrap(4)"><img src="/admin/img/m09.gif" name="Image09" width="145" height="40" border="0"></a></td>
					</tr>
					<tr id="submenu1" style="display: none;">
						<td colspan="4" height="26" align="left">
						<a href="/user/user_md.htm">정보수정</a>
												|
						<a href="/user/user_member_reg.htm">산하회원등록</a>
												 |

						 						후원조직도(<a href="javascript:MM_openBrWindow('./user_avata_map.htm?table_name=al_member&amp;id=M228066&amp;ooid=M228066&amp;r_level=1','','scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600,top=0,left=0');">레벨1</a>|<a href="javascript:MM_openBrWindow('./user_avata_map.htm?table_name=al_member&amp;id=M228066&amp;ooid=M228066&amp;r_level=2','','scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600,top=0,left=0');">레벨2</a>|<a href="javascript:MM_openBrWindow('./user_avata_map.htm?table_name=al_member&amp;id=M228066&amp;ooid=M228066&amp;r_level=3','','scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600,top=0,left=0');">레벨3</a>|<a href="javascript:MM_openBrWindow('./user_avata_map.htm?table_name=al_member&amp;id=M228066&amp;ooid=M228066&amp;r_level=4','','scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600,top=0,left=0');">레벨4</a>|<a href="javascript:MM_openBrWindow('./user_avata_map.htm?table_name=al_member&amp;id=M228066&amp;ooid=M228066&amp;r_level=5','','scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600,top=0,left=0');">롤업</a>) 
						 |
						 
						 						<a href="/user/user_sup_list.htm">산하회원리스트</a> 
						|
						
						 						<a href="/user/user_reco_list.htm">추천회원리스트</a>(<a href="/user/user_reco_maechul_list.htm">최근매출</a>) 
						 |
						 
							  
						<a href="javascript:MM_openBrWindow('/user/user_reco_map.htm','','scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600,top=0,left=0');">추천조직도</a>
						    | 
						대수별정보(<a href="javascript:MM_openBrWindow('/user/user_daesu_map.htm?level=1','','scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600,top=0,left=0');">1레벨</a>|<a href="javascript:MM_openBrWindow('/user/user_daesu_map.htm?level=2','','scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600,top=0,left=0');">2레벨</a>|<a href="javascript:MM_openBrWindow('/user/user_daesu_map.htm?level=3','','scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600,top=0,left=0');">3레벨</a>|<a href="javascript:MM_openBrWindow('/user/user_daesu_map.htm?level=4','','scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600,top=0,left=0');">4레벨</a>)    
						 <!-- | 
						<a href=javascript:MM_openBrWindow('/user/user_avata_map.htm?avata_id=M228066','','scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600,top=0,left=0');>SL조직도</a>  -->
						 <!-- | 
						<a href=javascript:MM_openBrWindow('/user/user_random_map.htm','','scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600,top=0,left=0');>랜덤조직도</a>  -->
						  <!-- | <a href=javascript:MM_openBrWindow('/user/user_reco_her.htm?id=M228066','','scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600,top=0,left=0');>추천조직도</a> -->
						</td>
						<!-- <td></td> -->
					</tr>
					<tr id="submenu2" style="">
						<td></td>
						<td colspan="2" width="300" height="26" align="left">
						<a href="/user/user_order_list.htm">주문내역</a>
						<!--  | 
						<a href="/user/user_reco_order_list.htm">하위주문내역(추천)</a>
						 | 
						<a href="/user/user_low_order_list.htm">하위주문내역(후원)</a> -->
						</td>
						<td></td>
					</tr>
					<tr id="submenu3" style="display:none">
						<td colspan="1"></td>
						<td width="145" colspan="3" height="26" align="center">
																														<a href="/user/user_kyuljae.htm"><font color="blue">결제하기</font></a> 
						| 
												<a href="/user/user_jeoklip_list.htm">포인트 내역</a>
						 <!-- | 
						<a href="/user/user_request_money.htm">출금신청</a> -->
						 |
						<a href="/user/bonus_jigup_list.htm">수당별지급리스트</a>
						</td>
					</tr>
					<tr id="submenu4" style="display:none">
						<td colspan="3"></td>
						<td width="145" height="26" align="left">
						<a href="/user/bbs_list.php?code=notice">공지사항</a>
						 | 
						<a href="/user/bbs_list.php?code=qna">묻고답하기</a>
						</td>
					</tr>
				</tbody></table>
				</div>

				</td>
			</tr>
			<tr>
				<td height="22" align="center">
								</td>
			</tr>
			<tr>
				<td>




<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">

<!-- 상태바 출력 -->
<script language="JavaScript">
<!--
window.status='';
//-->
</script>


<script language="javascript" type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}

// 정렬 방식
function orderChange(obj){
var d = document.itemForm;
	d.page.value="";
	d.orderOPT.value = obj;
	d.submit();
}

//-->
</script>
<script language="javascript">
<!--
// 이미지의 오른쪽과 아래쪽 여백
var nimgTopMarginX = 30;
var nimgTopMarginY = 15;

// 세로스크롤바의 폭과 가로스크롤바의 높이
var nScrollBarWidth = 16;
var nScrollBarHeight = 16;

// 브라우저 버전
var nVersion = 3;

// 이미지를 리프레시하는 간격
var nInterval = 100;

function SetUp()
{
// 브라우저의 버전을 정수로 변환
nVersion = parseInt(navigator.appVersion);

if (nVersion >= 4 )
{
//브라우저가 Microsoft Internet Explorer일 때
if (navigator.appName == "Microsoft Internet Explorer")
{
window.setInterval ("imgTopMove_Explorer();", nInterval);
}

//브라우저가 Netscape Navigator일 때
else
{
layerTop = document.layers["lyrTop"];
window.setInterval ("imgTopMove_Navigator();", nInterval);
}
}
}

function imgTopMove_Explorer()
{
//스크롤하지 않았을 때는 이미지가 보이지 않게 위치시킨다.
if (document.body.scrollLeft == 0 && document.body.scrollTop == 0) 
{
imgTop.style.pixelTop = -100;
}

//스크롤했을 때는 이미지의 위치를 셋팅한다.
else 
{
nimgTopOriginX = document.body.clientWidth + document.body.scrollLeft - imgTop.width - nimgTopMarginX;
nimgTopOriginY = document.body.clientHeight + document.body.scrollTop - imgTop.height - nimgTopMarginY;

imgTop.style.pixelLeft = nimgTopOriginX; //이미지의 X좌표(왼쪽 여백)을 설정
imgTop.style.pixelTop = nimgTopOriginY; //이미지의 Y좌표(위쪽 여백)을 설정
}
}

function imgTopMove_Navigator()
{ 
//스크롤하지 않았을 때는 이미지가 보이지 않게 위치시킨다.
if (window.pageXOffset == 0 && window.pageYOffset == 0) 
{
layerTop.top = -100
}

//스크롤했을 때는 이미지의 위치를 셋팅한다.
else 
{
nimgTopOriginX = window.innerWidth + window.pageXOffset - layerTop.clip.width - nimgTopMarginX;
nimgTopOriginY = window.innerHeight + window.pageYOffset - layerTop.clip.height - nimgTopMarginY;

//윈도우에 스크롤바가 있을 경우
if (window.scrollbars)
{
nimgTopOriginX -= nScrollBarWidth;
nimgTopOriginY -= nScrollBarHeight;
}
layerTop.left = nimgTopOriginX; //레이어의 X좌표(왼쪽 여백)을 설정
layerTop.top = nimgTopOriginY; //레이어의 Y좌표(위쪽 여백)을 설정
}
}
-->
</script>


<link href="codeshop.css" rel="stylesheet" type="text/css">


				<!--down table start-->
				<div align="center">
				<table border="0" cellpadding="0" cellspacing="0" width="680">
							<tbody><tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td background="img/tit.gif" height="25"><p style="margin-left: 5px"><b>공지사항</b></p></td>
							</tr>
							<tr>
								<td height="3"></td>
							</tr>
							<tr>
								<td background="img/tit02.gif" height="25">
								
								<!--게시판 타이틀 테이블 시작-->
								<table border="0" cellpadding="0" cellspacing="0" width="680">
									<tbody><tr>
										<td width="50" align="center"><font color="#FFFFFF">번 호</font></td>
										<td align="center"><font color="#FFFFFF">글제목</font></td>
										<td width="70" align="center"><font color="#FFFFFF">이 름</font></td>
										<td width="100" align="center"><font color="#FFFFFF">날 짜</font></td>
										<td width="50" align="center"><font color="#FFFFFF">조 회</font></td>
																				<td width="50" align="center"><font color="#FFFFFF">파 일</font></td>
																			</tr>
								</tbody></table>
								<!--게시판 타이틀 테이블 끝-->
								
								</td>
							</tr>
							<tr>
								<td background="img/tit03.gif" height="8"></td>
							</tr>
							<tr>
								<td>
								
								<!--리스트 테이블 시작-->
 	
								<table border="0" cellpadding="0" cellspacing="0" width="680">
<!-- 공지사항 START-->
<!-- 공지사항 END-->
<!-- bbs loop start -->
<!-- bbs loop end -->
								</table>
								
										
										<table width="680" border="0" cellspacing="0" cellpadding="0">
											<tbody><tr> 
												<td height="30" width="600" align="center" class="cp"> 
																								</td>
												<td width="80" align="right" class="menu"> </td>
											</tr>
										</tbody></table>
										
										</td>
							</tr>
<script language="javascript">
<!--
function searchCheck( box) {
	if( box.checked == false ) {
		bbs_search_form.search_item.value = eval(bbs_search_form.search_item.value) - eval(box.value);
	} else {
		bbs_search_form.search_item.value = eval(bbs_search_form.search_item.value) +eval(box.value);
	}
}

function search(){
	if(bbs_search_form.search_subject.checked == false && bbs_search_form.search_content.checked == false && bbs_search_form.search_name.checked == false)	{
		alert("검색을 체크해 주십시오.");
	} else if(bbs_search_form.search_order.value=="")	{
		alert("검색할 내용을 입력해 주십시오.");
		bbs_search_form.search_order.focus();
	} else {
		bbs_search_form.submit();
	}
}
//-->
</script>
							<tr>
								<td>
								
								<table height="28" border="0" align="center" cellpadding="0" cellspacing="0" background="/shop/images/searchBg.gif">
										<form name="bbs_search_form" method="post" action="/user/bbs_list.php?bbs_data=Array"></form>
 										<input type="hidden" name="search_item" value="0">
											<tbody><tr> 
												<td width="28" align="center" class="menu"><img src="/shop/images/search.gif" width="64" height="28"></td>
												<td class="menu">&nbsp;
												<input type="checkbox" name="search_subject" value="1" onclick="searchCheck(bbs_search_form.search_subject);">제목
												<input type="checkbox" name="search_content" value="2" onclick="searchCheck(bbs_search_form.search_content);">내용
												<input type="checkbox" name="search_name" value="4" onclick="searchCheck(bbs_search_form.search_name);">이름
												<input name="search_order" type="text" size="15" class="input">&nbsp;<a href="javascript:search();"><img src="/shop/images/bGo.gif" width="39" height="17" align="absmiddle" border="0"></a></td>
												<td width="6" align="center" class="menu"><img src="/shop/images/searchr.gif" width="6" height="28"></td>
											</tr>
										
								</tbody></table>
								
								</td>
							</tr>
							<tr>
								<td>　</td>
							</tr>
							</tbody></table>
						</div>
				<!--down table end-->

				
</td>
			</tr>
			<tr>
				<td>　</td>
			</tr>
			</tbody></table>
		<!--whole table end-->
		
		</td>
	</tr>
</tbody></table>
<!--align table end-->




</body></html>
