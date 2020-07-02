<?php echo form_open( base_url()."lien-he"); ?>
<style type="text/css">
<!--
.style1 {color: black}
.style2 {font-style: italic}
.style5 {font-weight: bold}
.style6 {font-weight: bold}
-->
</style>
<section>
	<div class="container">
		<div class="col-md-7 col-12">
			<div class="section-article contactpage" style="  padding-left: 20px;">
				<?php 
				echo validation_errors();
				
				?>
				<form accept-charset="UTF-8" action="<?php echo base_url() ?>lien-he" id="contact" method="post">
					<input name="FormType" type="hidden" value="contact">
					<input name="utf8" type="hidden" value="true">
					<h2 style="color: black">Liên hệ với shop </h2>
					<div class="form-comment">
						<div class="row" style="padding-left: 14px;">
							<div class="col-md-4 col-12">
							  <div class="form-group style2" style="width: 200px;">
								  <label for="name"> <strong>Họ tên : </strong></label>
								  <strong>
									<input id="name" name="fullname" type="text" value="" class="form-control">
								      </strong></div>
							</div>
							<div class="col-md-4 col-12 style5">
								<div class="form-group" style="width: 200px;">
									<label for="email"><em> Email :</em></label>
									<input id="email" name="email" class="form-control" type="email" value="">
								</div>
							</div>
							<div class="col-md-4 col-12 style6">
								<div class="form-group" style="width: 200px;"> <em>
								  <label for="phone"> Số điện thoại</label> 
								  :</em> 
								  <input type="number" id="phone" class="form-control" name="phone">
							  </div></div>
						</div>
						<div class="form-group"><strong>
						  <label for="message"><em> Tiêu đề</em> <em>: </em></label>
						  <textarea id="message" name="title" class="form-control custom-control" rows="2"></textarea>
						</strong></div>
						<div class="form-group"><strong>
						  <label for="message"><em> Ghi chú</em> <em>: </em></label>
						  <textarea id="message" name="content" class="form-control custom-control" rows="5"></textarea>
						</strong></div>
						<button type="submit" class="btn-update-order" >Gửi liên hệ</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div class="f-contact" style="
			padding-left: 32px;
			">
			<h1 style="color: black">Thông tin liên hệ</h1>
			<ul class="list-unstyled">
				<li class="clearfix"><span style="color: black">TP.Hồ Chí Minh </span><br>
			  </li>
				<li class="clearfix"><span style="color: black">Hotline : 096 127 0500 </span>				</li>
				<li class="clearfix style1"><a href="mailto:hotro@dochoihailinh.vn">hotro@dochoihailinh.vn</a>				</li>
			</ul>
		</div>

	</div>
	<div class="col-md-12 col-lg-12 col-xs-12 col-12">

		<div style="margin-top: 15px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3919.775145735074!2d106.70436431428682!3d10.75180526258894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1559320476029!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>

</section>