@extends('layout.admain')
@section('title')
new content
@endsection

@section('main-area')


	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->





			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable tabbable-custom boxless tabbable-reversed">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_0" data-toggle="tab">
								Form Actions </a>
							</li>

						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">


								<div class="portlet box green">
                                						<div class="portlet-title">
                                							<div class="caption">
                                								<i class="fa fa-gift"></i>افزودن مطلب جدید
                                							</div>
                                							<div class="tools">
                                								<a href="javascript:;" class="collapse">
                                								</a>
                                								<a href="#portlet-config" data-toggle="modal" class="config">
                                								</a>
                                								<a href="javascript:;" class="reload">
                                								</a>
                                								<a href="javascript:;" class="remove">
                                								</a>
                                							</div>
                                						</div>
                                						<div class="portlet-body form">
                                							<!-- BEGIN FORM-->
                                							<form class="form-horizontal form-bordered">
 {{ Form::model( $content, array('route' => array('admin/content/change',  $content->id))) }}

                                                    <div class="form-body">

                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label">نام مطلب</label>
                                                        <div class="col-md-4">
                                                          {{ Form::text('title', $content->title, array('class'=>'form-control','placeholder'=>'نام مطللب خود را وارد نمایید')) }}

                                                        </div>
                                                    </div>
 <div class="form-group">
										<label class="control-label col-md-3">متن کوتاه</label>
										<div class="col-md-9">
											<textarea value id="maxlength_textarea" name="slug" class="form-control" maxlength="225" rows="2" placeholder="متن کوتاه در مورد مطلب شما">{{$content->slug}}</textarea>
											<span class="help-block">
											توضیح کوتاه متن در مورد مقاله شما </span>
										</div>
								        	</div>


 <div class="form-group">

                                    <div class="form-body">
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">متن</label>
                                            <div class="col-md-9">
                                                <textarea class="ckeditor form-control" name="body" rows="6">{{$content->body}}</textarea>
                                            </div>
                                        </div>
                                    </div>


                                </div>




{{--
                                                          {{ Form::File('image', null, array('class'=>'form-control','placeholder'=>'نام مطللب خود را وارد نمایید')) }}
--}}




	                                            <div class="form-group">
													<label class="col-md-3 control-label">دسته بندی</label>
													<div class="col-md-2">
															<select class="select2_category form-control" data-placeholder="Choose a Category" tabindex="1" name="category_id">
                                                                    <option value="1">Category 1</option>
                                                                    <option value="2">Category 2</option>
                                                                    <option value="3">Category 5</option>
                                                                    <option value="4">Category 4</option>
                                                                </select>
													</div>
												</div>
                                               <div class="form-group">
													<label class="col-md-3 control-label">زیر دسته بندی</label>
													<div class="col-md-2">
															<select class="select2_category form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                    <option value="Category 1">Category 1</option>
                                                                    <option value="Category 2">Category 2</option>
                                                                    <option value="Category 3">Category 5</option>
                                                                    <option value="Category 4">Category 4</option>
                                                                </select>
													</div>
												</div>



                                									<div class="form-group">
                                										<label class="control-label col-md-3">عکس</label>
                                										<div class="col-md-3">
                                											<div class="fileinput fileinput-new" data-provides="fileinput">
                                												<div class="input-group input-large">
                                													<div class="form-control uneditable-input" data-trigger="fileinput">
                                														<i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
                                														</span>
                                													</div>
                                													<span class="input-group-addon btn default btn-file">
                                													<span class="fileinput-new">
                                													انتخاب فایل </span>
                                													<span class="fileinput-exists">
                                													تعویض عکس </span>
                                													<input type="file" name="...">

                                													</span>
                                													<a href="#" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                                													پاک کردن عکس </a>
                                												</div>
                                											</div>
                                										</div>
                                									</div>

                                                                     <div class="form-group">
                                                                                <label class="col-md-3 control-label">ترتیب نمایس</label>
                                                                                <div class="col-md-4">
                                                                                    <input type="text" class="form-control" placeholder="Enter text">
                                                                                    <span class="help-block">
                                                                                   توضیح </span>
                                                                                </div>
                                                                     </div>
                                                                     <div class="form-group">
                                                                                    <label class="col-md-3 control-label">کلمات کلیدی</label>
                                                                                    <div class="col-md-4">
                                                                                        <input type="text" class="form-control" placeholder="Enter text">
                                                                                        <span class="help-block">
                                                                                        توضیح </span>
                                                                                    </div>
                                                                      </div>

                                                                     <div class="form-group">
                                                                                <label class="col-md-3 control-label">منبع</label>
                                                                                <div class="col-md-4">
                                                                                    <input type="text" class="form-control" placeholder="Enter text">
                                                                                    <span class="help-block">
                                                                                   توضیح </span>
                                                                                </div>
                                                                     </div>
                                                                     <div class="form-group">
                                                                                    <label class="col-md-3 control-label">لینک منبع</label>
                                                                                    <div class="col-md-4">
                                                                                        <input type="text" class="form-control" placeholder="Enter text">
                                                                                        <span class="help-block">
                                                                                       توضیح </span>
                                                                                    </div>
                                                                      </div>

                                                                     <div class="form-group">
                                                                        <label class="col-md-3 control-label">وضعیت</label>
                                                                        <div class="col-md-2">
                                                                                <select class="select2_category form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                                        <option value="Category 1">فعال</option>
                                                                                        <option value="Category 2">غیرفعال</option>

                                                                                    </select>
                                                                        </div>
                                                                    </div>

                                                                   <div class="form-group">
                                                                        <label class="col-md-3 control-label">وضعیت نمایش</label>
                                                                   <div class="input-group">
                                                                            <div class="icheck-list">
                                                                                <label>
                                                                                <input type="checkbox" class="icheck"> نمایش در اسلاید خبر </label>
                                                                                <label>
                                                                                <input type="checkbox" checked class="icheck"> نمایش در مطالب داغ</label>

                                                                            </div>
                                                                    </div>
                                                                        </div>
</form>
                                								<div class="form-actions">
                                									<div class="row">
                                										<div class="col-md-offset-3 col-md-9">
                                											<button type="submit" class="btn purple"><i class="fa fa-check"></i> افزودن</button>
                                											<button type="button" class="btn default">لغو</button>
                                										</div>
                                									</div>
                                								</div>
                                							{{form::close()}}
                                							<!-- END FORM-->
                                						</div>
                                					</div>

							</div>



						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>

























@endsection