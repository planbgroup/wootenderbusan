<?php 
	include_once("./_common.php");
	$page = 6;
	$sub_page = 0;
	$page_title = "6th Busan Breast Forum";
	$bg_url = "/assets/img/forum/bg_conference.jpg";
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("../../inc/header.php") ?>
		<style type="text/css">
		</style>
	</head>
	<body>
		<?php include("../../inc/nav.php") ?>
		<main>
			<section class="section-top g-overflow-hidden" style="margin-top: 0 !important">
				<div class="container-fluid g-bg-img-hero top-rounded animate" style="background-image: url(<?php echo $bg_url ?>); max-width: 1800px;" data-ani="fadeScaleIn">
					<div class="container-fluid">
						<div class="g-pt-100 g-pt-150--lg g-pb-70 ">
							<div class="text-forum-2 g-mb-40">BUSAN ULSAN GYEONGNAM<br>BREAST CANCER SOCIETY</div>
							<div class="text-hero-01 g-mb-30"><span class="fw-600">6<sup>th</sup> Busan Breast Forum</span></div>
							<div class="text-forum-3 g-mb-5">일정: 2024년 6월 22일(토) / 6월 23일(일)</div>
							<div class="text-forum-3 ">장소: 부산 누리마루 APEC 하우스 / 웨스틴 조선 부산</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="section-content">
				<div class="container-fluid">
					<div class="d-lg-flex justify-content-between align-items-end">
						<div class="page-title text-title g-mb-20 g-mb-0--lg"><?php echo $page_title ?></div>
						<?php include_once("../../inc/crumb_forum.php") ?>
					</div>

					<hr class="g-mt-10">
					<div class="g-mt-40 g-mt-70--lg">
						<div class="text-forum-1">General Information</div>
						<div class="row g-mt-30 g-mt-60--lg">
							<div class="col-lg-4">
								<div class="text-02 fw-600 g-mb-5">초대의 글</div>
							</div>
							<div class="col-lg-8">
								<div class="row">
									<div class="col-md-4 col-lg-4 g-mb-20">
										<img src="/assets/img/about/president_2023.jpg" alt="" class="img-fluid w-full">
									</div>
									<div class="col-md-8 col-lg-8">
										<div class="text-06 ">안녕하십니까?</div>
										<div class="text-06 g-mb-10">친애하는 유방암 전문가 및 종양-바이오 헬스 연구자 여러분</div>
										<div style="word-break:keep-all" class="text-06 ">여름바다가 부르는 바닷가의 물결소리가 우리의 학술 공간을 더욱 아름답게 만드는 6차 Busan Breast Forum이 6월 22일과 23일에 걸쳐 해운대 동백 섬 누리마루에서 열리게 되었습니다.</div>
										<div style="word-break:keep-all" class="text-06 g-mb-10">이번 행사는 유방암 진단과 치료에 활용될 수 잇는 혁신적 바이오 헬스 기술, 정밀의학을 향한 과학 분야의 발전을 배울 수 있고 다양한 옵션을 제공하고자 합니다. 이 포럼을 통해 전문가들과의 네트워킹 및 지식교류의 기회를 제공할 뿐만 아니라, 새로운 협력 가능성을 모색할 수 있는 훌륭한 장이 될 것입니다.</div>
										<div style="word-break:keep-all" class="text-06 g-mb-10">우리의 지식과 경험이 하나되어 함께 피어나길 바랍니다.</div>
										<div style="word-break:keep-all" class="text-06 g-mb-20">우리의 아이디어와 열정이 꽃피우는 이곳에서 새로운 발견과 혁신이 우리를 이끌 것입니다.</div>
										<div style="word-break:keep-all" class="text-06 g-mb-10">부산울산경남유방암연구회 회장</div>
		
										<div class="text-05 fw-600">강 태 우</div>
									</div>
								</div>
							</div>
						</div>

						<style type="text/css">
							.bt{border-top: 2px solid #000}
							.bb{border-bottom: 2px solid #000}
							.bg{background-color: #F2F2F2}
							.board td.br{border-right: solid 1px #E0E0E0 !important;}
							td{white-space: nowrap !important;}
							
						</style>
						<div class="row g-mt-30 g-mt-60--lg">
							<div class="col-lg-4">
								<div class="text-02 fw-600 g-mb-5">개요</div>
							</div>
							<div class="col-lg-8">
								<div class="table-responsive-lg ">
									<table class="table board">
										<tbody>
											<tr>
												<td class="g-px-20 bt bg text-center fw-600">학회명</td>
												<td class="bt g-pl-30">6th Busan Breast Forum</td>
											</tr>
											<tr>
												<td class="g-px-20 bg text-center fw-600">주제</td>
												<td class="g-pl-30">
													<div>Bridging Basic Science to Clinical Practice</div>
													<div>: Uniting for Breast Cancer Treatment</div>
												</td>
											</tr>
											<tr>
												<td class="g-px-20 bg text-center fw-600">일정</td>
												<td class="g-pl-30">2024년 6월 22일(토) / 6월 23일(일)</td>
											</tr>
											<tr>
												<td class="g-px-20 bb bg text-center fw-600">장소</td>
												<td class="bb g-pl-30">부산 누리마루 APEC 하우스 / 웨스틴 조선 부산</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<style type="text/css">
							.route{color: #A46B6F;}
						</style>
						<div class="g-mt-40 g-mt-70--lg">
							<div class="row g-mt-30 g-mt-60--lg">
								<div class="col-lg-4">
									<div class="text-02 fw-600 g-mb-5">오시는 길</div>
								</div>
								<div class="col-lg-8">
									<div id="daumRoughmapContainer1710901099021" class="root_daum_roughmap root_daum_roughmap_landing" style="width: 100% !important"></div>
									<div class="text-04 g-mt-40 g-color-black g-mb-20 g-font-weight-700">교통안내</div>

									<div>
										<ul class="nav d-flex" role="tablist" data-target="nav-tab-1">
											<li class="align-self-stretch nav-item g-pos-rel">
												<a class="nav-link text-04 active" data-toggle="tab" href="#tab-content-03" role="tab" aria-selected="false">지하철</a>
											</li>
											<li class="align-self-stretch nav-item g-pos-rel">
												<a class="nav-link text-04 " data-toggle="tab" href="#tab-content-04" role="tab" aria-selected="true">버스</a>
											</li>
										</ul>

										<div id="nav-tab-1" class="tab-content g-mt-15">
											<div class="tab-pane fade active show" id="tab-content-03" role="tabpanel">
												<div class="text-06 g-font-weight-700"><span class="route">경로1</span> 부산역 ↔ 누리마루 APEC 하우스</div>
												<div class="text-06 g-ml-5 g-mb-10">- 1호선 부산역 → 2호선 서면역(환승) → 동백역 1번출구 → 누리마루 APEC하우스 방면 도보 15분</div>
												<div class="text-06 g-font-weight-700"><span class="route">경로2</span> 노포동 종합버스터미널 ↔ 누리마루 APEC 하우스</div>
												<div class="text-06 g-ml-5 g-mb-10">- 1호선 노포역 → 3호선 연산역(환승) → 2호선 수영역(환승) → 동백역 1번출구 → 누리마루 APEC하우스 방면 도보 15분</div>
												<div class="text-06 g-font-weight-700"><span class="route">경로3</span> 사상 서부시외버스터미널 → 누리마루 APEC 하우스</div>
												<div class="text-06 g-ml-5 g-mb-10">- 2호선 서면역 → 동백역 1번출구 → 누리마루 APEC하우스 방면 도보 15분</div>
												<div class="text-06 g-font-weight-700"><span class="route">경로4</span> 김해공항→ 누리마루 APEC 하우스</div>
												<div class="text-06 g-ml-5 g-mb-30">- 부산김해경전철 공항역 → 부산김해경전철 사상역 하차 → 2호선 사상역 → 승차 동백역 1번출구 → 누리마루 APEC하우스 방면 도보 15분</div>
											</div>
											<div class="tab-pane fade" id="tab-content-04" role="tabpanel">
												<div class="text-05 g-mb-10 g-font-weight-700"></div>
												<div class="text-06 g-font-weight-700"><span class="route">경로1</span> 부산역 → 누리마루 APEC 하우스</div>
												<div class="text-06 g-ml-5 g-mb-10">- 급행1003번(부산역) → 동백섬입구 하차 → 누리마루 APEC하우스 방면 도보 7분</div>
												<div class="text-06 g-font-weight-700"><span class="route">경로2</span> 노포동 종합버스터미널 → 누리마루 APEC 하우스</div>
												<div class="text-06 g-ml-5 ">- 급행1002번(노포동 부산 종합버스터미널) → 센텀시티역. 벡스코(환승)_139번 → 동백섬입구 하차 → 누리마루 APEC하우스 방면 도보 7분</div>
												<div class="text-06 g-ml-5 g-mb-10">- 급행1002번(노포동 부산 종합버스터미널) → 센텀센시빌(환승)_115-1번/100-1번/200번/31번/100번 → 운촌 하차 → 누리마루 APEC하우스 방면 도보 11분</div>
												<div class="text-06 g-font-weight-700"><span class="route">경로3</span> 사상 서부시외버스터미널 → 누리마루 APEC 하우스</div>
												<div class="text-06 g-ml-5">- 33번/110번(서부 시외버스터미널) → 만덕그린코어(환승)_200번 → 운촌 하차 → 누리마루 APEC하우스 방면 도보 11분</div>
												<div class="text-06 g-ml-5 g-mb-10">- 62번(서부 시외버스터미널) → 양정역4번출구(환승)_63번 → 운촌 하차 → 누리마루 APEC하우스 방면 도보 11분</div>
												<div class="text-06 g-font-weight-700"><span class="route">경로4</span> 김해공항→ 누리마루 APEC 하우스</div>
												<div class="text-06 g-ml-5">- 일반 307번(김해공항) → 동백섬입구 하차 → 누리마루 APEC하우스 방면 도보 7분</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="g-mt-40 g-mt-70--lg">
							<div class="row g-mt-30 g-mt-60--lg">
								<div class="col-lg-4">
									<div class="text-02 fw-600 g-mb-5">등록기간</div>
								</div>
								<div class="col-lg-8">
									<div class="table-responsive-lg ">
										<table class="table board">
											<tbody>
												<tr>
													<td class="g-px-20 bt bg fw-600 text-center">구분</td>
													<td class="bt g-pl-30 fw-600 bg">일정</td>
												</tr>
												<tr>
													<td class="g-px-20  br text-center">사전등록</td>
													<td class="g-pl-30">2024년 4월 1일(월) - 5월 31일(금)</td>
												</tr>
												<tr>
													<td class="g-px-20 bb br text-center">현장등록</td>
													<td class="bb g-pl-30">2024년 6월 22일(토) 12:30 - 16:30</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>


						<div class="g-mt-40 g-mt-70--lg">
							<div class="row g-mt-30 g-mt-60--lg">
								<div class="col-lg-4">
									<div class="text-02 fw-600 g-mb-5">등록비 안내</div>
								</div>
								<div class="col-lg-8">
									<div class="table-responsive">
										<table class="table board">
											<tbody>
												<tr>
													<td class="g-px-20 text-center bt bg fw-600" style="width:17%">구분</td>
													<td class="g-px-20 text-center bt bg fw-600" style="width:17%">등록비</td>
													<td class="g-px-20 text-center bt bg fw-600">제공사항</td>
												</tr>
												<tr>
													<td class="text-center br g-px-20" >사전등록</td>
													<td class="text-center br g-px-20" rowspan="2">무료</td>
													<td class=" g-px-20">5성급 호텔 1박 제공(*선착순 제공 / 6월22일(토) 체크인 / 조식포함)</td>
												</tr>
												<tr>
													<td class="text-center br g-px-20">현장등록</td>
													<td class=" g-px-20">현장등록 시 숙박제공에 제한이 있을 수 있으므로 숙박이 필요하신 분들은 사전등록 필수</td>
												</tr>
												<tr>
													<td colspan="5" class="text-center g-px-20 bb">문의: 070-7587-0136 (부울경유방암연구회 사무국 허은혜 담당자)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="row g-mt-30 g-mt-60--lg">
							<div class="col-lg-4">
								<div class="text-02 fw-600 g-mb-5">프로그램</div>
							</div>
							<div class="col-lg-8">
								<ul class="nav d-flex" role="tablist" data-target="nav-tab">
									<li class="align-self-stretch nav-item g-pos-rel">
										<a class="nav-link text-04  active" data-toggle="tab" href="#tab-content-01" role="tab" aria-selected="true">2024년 6월 22일(토요일)</a>
									</li>
									<li class="align-self-stretch nav-item g-pos-rel">
										<a class="nav-link text-04 " data-toggle="tab" href="#tab-content-02" role="tab" aria-selected="false">2024년 6월 23일(일요일)</a>
									</li>
								</ul>
								<style>
									.table.program td{
										font-size: 13px;
									}
									.table.program td{border-color: #E8B8B8 !important;}
									.table.program td.bt{border-color: #E8B8B8 !important;}
									.table.program td.br{border-color: #E8B8B8 !important;}
									.table.program td.bb{border-color: #E8B8B8 !important;}
									.table.program td.bg{background-color: #E8B8B8 !important;}
								</style>
								<div id="nav-tab" class="tab-content g-mt-15">
									<div class="tab-pane fade active show" id="tab-content-01" role="tabpanel">
										<div class="text-06 g-mb-5"><b>Venue : Nurimary APEC House, Haeundae, Busan</b></div>
										<?php include_once('./inc_program_1.php') ?>
									</div>
									<div class="tab-pane fade" id="tab-content-02" role="tabpanel">
										<div class="text-06 g-mb-5"><b>Venue : The Westin Josun Busan, Conference room</b></div>
										<?php include_once('./inc_program_2.php') ?>
									</div>
								</div>


								<a class="btn-outline-icon-01 g-mt-40" href="/html/forum/registration.php" target="_self">
									<span class="arrow">Registration</span>
								</a>
							</div>
						</div>
					</div>


				</div>
			</section>

			<?php include("../../inc/footer.php") ?>
		
		</main>
		<?php include("../../inc/js_board.php"); ?>

		<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

		<!-- 3. 실행 스크립트 -->
		<script charset="UTF-8">
			new daum.roughmap.Lander({
				"timestamp" : "1710901099021",
				"key" : "2im3h",
				"mapWidth" : "100%",
				"mapHeight" : "360"
			}).render();
		</script>
	</body>
</html>

