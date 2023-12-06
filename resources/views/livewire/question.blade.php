<div>

    <div class="wrapper_centering">
        <div class="container_centering text-center">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                        <div class="main_title_1">
                            <img src="{{ asset("front/img/logo.png") }}" width="200" class="my-3 d-block mx-auto" alt="">
                            <h2 class="text-white"> أداة تقييم القدرات المؤسسية والفنية لمراكز الإغاثة بوزارة التضامن
                                الاجتماعي للتعامل مع الأزمات والكوارث
                            </h2>


                            <p class="mt-2"><strong>البيانات سرية ولن تستخدم إلا لأغراض البحث العلمي</strong></p>

                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">السابق</button>
                                <button type="button" name="forward" class="forward">التالى</button>
                                <button type="submit" wire:click="report()" name="process" class="submit">ارسال</button>
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                            <!-- /bottom-wizard -->
                        </div>
                    </div>
                    <!-- /col -->
                    <div class="col-xl-5 col-lg-5">
                        <div id="wizard_container" class="text-end">
                            <div id="top-wizard">
                                <div id="progressbar"></div>
                            </div>
                            <!-- /top-wizard -->
                            <form id="wrapped" autocomplete="off">
                                <input id="website" name="website" type="text" value="">
                                <!-- Leave for security protection, read docs for details -->
                                <div id="middle-wizard">

                                    <!-- start step 1 -->
                                    <!-- الشيت  1  -->

                                    <div class="step  wizard-step current">
                                        <h3 class="main_question">
                                            القسم الأول  : البيانات الشخصية
                                            <br>
                                            <strong> من فضلك قم بادخال
                                                بياناتك</strong>

                                        </h3>
                                        <div class="form-group">
                                            <label for="firstname">الاسم </label>
                                            <input type="text" wire:model.live="name" name="firstname" id="firstname" class="form-control ">
                                        </div>
                                        <div>@error('name') {{ $message }} @enderror</div>

                                        <div class="form-group">
                                            <label for="job">الوظيفة</label>
                                            <div class="input-group mb-3">
                                                <select name="job" wire:model="job" id="" class="form-select fl-select">
                                                    <option value="مستوى مركزي بوزارة التضامن الاجتماعي">
                                                        مستوى مركزي بوزارة التضامن الاجتماعي
                                                    </option>

                                                    <option value="مدير مديرية">
                                                        مدير مديرية
                                                    </option>

                                                    <option value="وكيل مديرية">
                                                        وكيل مديرية
                                                    </option>

                                                    <option value="مدير مركز إغاثة"
                                                    >مدير مركز إغاثة
                                                    </option>

                                                </select>
                                                <div>@error('job') {{ $message }} @enderror</div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="governorate">المحافظة</label>
                                            <div class="input-group mb-3">
                                                <select name="governorate" wire:model="governorate" id="governorate" class="form-select fl-select" >
                                                    @foreach($governorates as $governorate)
                                                        <option value="{{$governorate->id}}">
                                                            {{$governorate->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div>@error('governorate') {{ $message }} @enderror</div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="years">سنوات الخبرة</label>
                                            <input type="number" wire:model.live="Years_of_experience" name="years" id="years" class="form-control">
                                        </div>
                                        <div>@error('Years_of_experience') {{ $message }} @enderror</div>


                                        <div class="form-group">
                                            <label for="job">محل الإقامة</label>
                                            <div class="input-group mb-3">
                                                <select name="" wire:model="residence" id="" class="form-select fl-select">
                                                    <option value="حضر">
                                                        حضر
                                                    </option>
                                                    <option value=" ريف ">
                                                        ريف
                                                    </option>

                                                </select>
                                                <div>@error('residence') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <div class="row">

                                            <div class="col-9">
                                                <div class="form-group radio_input">
                                                    <label class="container_radio">ذكر
                                                        <input type="radio" wire:model="gender" name="gender" value="0" class="">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container_radio">انثي
                                                        <input type="radio" wire:model="gender" name="gender" value="1" class="">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div>@error('gender') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="job">يا ترى إيه آخر مرحلة تعليمية خلصتها بنجاح ؟</label>
                                            <div class="input-group mb-3">
                                                <select name="" wire:model="graduation" id="" class="form-select fl-select">
                                                    <option value=" مؤهل متوسط">
                                                        مؤهل متوسط
                                                    </option>

                                                    <option value="مؤهل فوق المتوسط">
                                                        مؤهل فوق المتوسط
                                                    </option>

                                                    <option value="جامعى">
                                                        جامعى
                                                    </option>

                                                    <option value="أعلى من الجامعى">
                                                        أعلى من الجامعى
                                                    </option>

                                                </select>
                                                <div>@error('graduation') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="step wizard-step">
                                        <h3 class="main_question">
                                            القسم الثاني: البيانات التعريفية للمركز
                                            <br><strong> من فضلك قم بادخال
                                                بياناتك</strong></h3>
                                        <div class="form-group">
                                            <label for="time"> تاريخ الزيارة بالساعة واليوم </label>
                                            <input type="datetime-local" wire:model.live="date_of_visit" name="time" id="time" class="form-control">
                                        </div>
                                        <div>@error('date_of_visit') {{ $message }} @enderror</div>


                                        <div class="form-group">
                                            <label for="with"> تم استيفاء النموذج بواسطة</label>
                                            <input type="text" wire:model.live="mode_by" name="with" id="with" class="form-control">
                                        </div>
                                        <div>@error('mode_by') {{ $message }} @enderror</div>


                                        <div class="form-group">
                                            <label for="centre"> اسم المركز من واقع المستندات </label>
                                            <input type="text" wire:model.live="center_name" name="centre" id="centre" class="form-control">
                                        </div>
                                        <div>@error('center_name') {{ $message }} @enderror</div>

                                        <div class="form-group">
                                            <label for="adresse"> العنوان تفصيلي بعلامة مميزة </label>
                                            <input type="text" wire:model.live="address" name="adresse" id="adresse" class="form-control">
                                        </div>
                                        <div>@error('address') {{ $message }} @enderror</div>

                                        <div class="form-group">
                                            <label for="time"> كود وسنة تأسيس المركز</label>
                                            <input type="text" wire:model.live="code" name="time" id="time" class="form-control">
                                        </div>
                                        <div>@error('code') {{ $message }} @enderror</div>

                                        <div class="form-group">
                                            <label for="phone"> تليفون </label>
                                            <input type="number" wire:model.live="phone" name="phone" id="phone" class="form-control">
                                        </div>
                                        <div>@error('phone') {{ $message }} @enderror</div>

                                        <div class="form-group">
                                            <label for="Email"> بريد إلكتروني</label>
                                            <input type="Email" wire:model.live="email" name="Email" id="Email" class="form-control">
                                        </div>
                                        <div>@error('email') {{ $message }} @enderror</div>

                                        <div class="form-group">
                                            <label for="date"> تاريخ الانشاء</label>
                                            <input type="date" wire:model.live="published_at" name="date" id="date" class="form-control">
                                        </div>
                                        <div>@error('published_at') {{ $message }} @enderror</div>


                                        <div class="form-group">
                                            <label for="brain"> القدرة الاستيعابية </label>
                                            <input type="text" wire:model.live="carrying_capacity" name="brain" id="brain" class="form-control">
                                        </div>

                                        <div class="form-group mb-5">
                                            <label for="floor"> عدد الأدوار </label>
                                            <input type="number" wire:model.live="number_of_floors" name="floor" id="floor" class="form-control">
                                        </div>
                                        <div>@error('number_of_floors') {{ $message }} @enderror</div>
                                    </div>

                                    <!-- /step 2-->
                                    <!-- الشيت 3  -->
                                    <div class="step wizard-step">
                                        <h3 class="main_question mb-4">
                                            القسم الثالث: مكون القدرات المؤسسية
                                            <strong> </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <label>هل متوفر لدى المركز بيان بالرسالة الخاصة به مدونة
                                                        ومعلنة</label>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="statement" name="center_statement" class="required"
                                                               wire:model="center_statement"
                                                               value="1" >
                                                        <label class="radio" for="statement"></label>
                                                        <label for="statement" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_statement" name="center_statement" class="required"
                                                               wire:model="center_statement"
                                                               value="0" >
                                                        <label class="radio" for="center_statement"></label>
                                                        <label for="center_statement" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('center_statement') {{ $message }} @enderror</div>

                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما مدى تقييمك لهذا البيان ؟</label>
                                            <div class="input-group mb-3">
                                                <select name="" id="" wire:model="rate" class="form-select fl-select">
                                                    <option value="جيد جدا">
                                                        جيد جدا
                                                    </option>

                                                    <option value="جيد">
                                                        جيد
                                                    </option>

                                                    <option value="لا استطيع التحديد">
                                                        لا استطيع التحديد
                                                    </option>

                                                    <option value="سيء">
                                                        سيء
                                                    </option>

                                                    <option value="سيء جدا">
                                                        سيء جدا
                                                    </option>
                                                </select>
                                                <div>@error('rate') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <h3 class="main_question mb-4"><strong> يضم فريق العمل عددا من السيدات </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="women" name="includes_women" class="required"
                                                               wire:model="includes_women"
                                                               value="1" >
                                                        <label class="radio" for="women"></label>
                                                        <label for="women" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="includes_women" name="includes_women" class="required"
                                                               wire:model="includes_women"
                                                               value="0" >
                                                        <label class="radio" for="includes_women"></label>
                                                        <label for="includes_women" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('includes_women') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong> تدعم إدارة المركز الحصول على دورات تدريبية لفريق
                                                العمل </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="training_courses_support" name="" class="required"
                                                               wire:model="training_courses_support"
                                                               value="1" >
                                                        <label class="radio" for="training_courses_support"></label>
                                                        <label for="training_courses_support" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="training_courses_support2" name="" class="required"
                                                               wire:model="training_courses_support"
                                                               value="0" >
                                                        <label class="radio" for="training_courses_support2"></label>
                                                        <label for="training_courses_support2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('training_courses_support') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong> هل يتم عقد دورات تدريبية بالفعل </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="training_courses" name="" class="required"
                                                               wire:model="training_courses"
                                                               value="1" >
                                                        <label class="radio" for="training_courses"></label>
                                                        <label for="training_courses" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="training_courses2" name="" class="required"
                                                               wire:model="training_courses"
                                                               value="0" >
                                                        <label class="radio" for="training_courses2"></label>
                                                        <label for="training_courses2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('training_courses') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما مدى تقييمك لهذه الدورات؟</label>
                                            <div class="input-group mb-3">
                                                <select name="" wire:model="course_rate" id="" class="form-select fl-select">
                                                    <option value="جيد جدا">
                                                        جيد جدا
                                                    </option>

                                                    <option value="جيد">
                                                        جيد
                                                    </option>

                                                    <option value="لا استطيع التحديد">
                                                        لا استطيع التحديد
                                                    </option>

                                                    <option value="سيء">
                                                        سيء
                                                    </option>

                                                    <option value="سيء جدا">
                                                        سيء جدا
                                                    </option>
                                                </select>
                                                <div>@error('course_rate') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <h3 class="main_question mb-4"><strong> يوجد بالمركز لجان مختلفة تعمل على إدارة
                                                الأنشطة </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="committees" name="" class="required"
                                                               wire:model="committees"
                                                               value="1" >
                                                        <label class="radio" for="committees"></label>
                                                        <label for="committees" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="committees1" name="" class="required"
                                                               wire:model="committees"
                                                               value="0" >
                                                        <label class="radio" for="committees1"></label>
                                                        <label for="committees1" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('committees') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما مدى تقييمك لهذه اللجان</label>
                                            <div class="input-group mb-3">
                                                <select name="" id="" wire:model="committee_report" class="form-select fl-select">
                                                    <option value="جيد جدا">
                                                        جيد جدا
                                                    </option>

                                                    <option value="جيد">
                                                        جيد
                                                    </option>

                                                    <option value="لا استطيع التحديد">
                                                        لا استطيع التحديد
                                                    </option>

                                                    <option value="سيء">
                                                        سيء
                                                    </option>

                                                    <option value="سيء جدا">
                                                        سيء جدا
                                                    </option>
                                                </select>
                                                <div>@error('committee_report') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <h3 class="main_question mb-4"><strong> تعمل كل لجنة على إعداد تقرير يتضمن المهام التي
                                                أنجزتها وتقوم برفعه إداريا </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="committee_active" name="" class="required"
                                                               wire:model="committee_active"
                                                               value="1" >
                                                        <label class="radio" for="committee_active"></label>
                                                        <label for="committee_active" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="committee_active2" name="" class="required"
                                                               wire:model="committee_active"
                                                               value="0" >
                                                        <label class="radio" for="committee_active2"></label>
                                                        <label for="committee_active2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('committee_active') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما هي دورية هذه التقارير؟ </label>
                                            <div class="input-group mb-3">
                                                <select name=""  wire:model="center_duration" id="" class="form-select fl-select">
                                                    <option value="شهرية">
                                                        شهرية
                                                    </option>

                                                    <option value="ربع سنوية">
                                                        ربع سنوية
                                                    </option>

                                                    <option value="نص سنوية">
                                                        نص سنوية
                                                    </option>

                                                    <option value="سنوية">
                                                        سنوية
                                                    </option>
                                                </select>
                                                <div>@error('center_duration') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <h3 class="main_question mb-4"><strong> يعمل المركز علي تحديد الاحتياجات المجتمعية
                                                للمجتمعات التي يوجد بها</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_needs" name="" class="required"
                                                               wire:model="center_needs"
                                                               value="1" >
                                                        <label class="radio" for="center_needs"></label>
                                                        <label for="center_needs" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_needs2" name="" class="required"
                                                               wire:model="center_needs"
                                                               value="0" >
                                                        <label class="radio" for="center_needs2"></label>
                                                        <label for="center_needs2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('center_needs') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong> يعتمد المركز منهجية علمية ومهنية لدراسة هذه
                                                الاحتياجات والتخطيط للتدخل </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_study" name="" class="required"
                                                               wire:model="center_study"
                                                               value="1" >
                                                        <label class="radio" for="center_study"></label>
                                                        <label for="center_study" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_study2" name="" class="required"
                                                               wire:model="center_study"
                                                               value="0" >
                                                        <label class="radio" for="center_study2"></label>
                                                        <label for="center_study2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('center_study') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما مدى تقييمك لهذه المنهجية ؟</label>
                                            <div class="input-group mb-3">
                                                <select name="" wire:model="rate_study" id="" class="form-select fl-select">
                                                    <option value="جيد جدا">
                                                        جيد جدا
                                                    </option>

                                                    <option value="جيد">
                                                        جيد
                                                    </option>

                                                    <option value="لا استطيع التحديد">
                                                        لا استطيع التحديد
                                                    </option>

                                                    <option value="سيء">
                                                        سيء
                                                    </option>

                                                    <option value="سيء جدا">
                                                        سيء جدا
                                                    </option>
                                                </select>
                                                <div>@error('rate_study') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <h3 class="main_question mb-4"><strong> يقوم جميع أفراد فريق العمل بالاشتراك في تخطيط
                                                تدخلات واجراءات عمل المركز</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="team_plane" name="" class="required"
                                                               wire:model="team_plane"
                                                               value="1" >
                                                        <label class="radio" for="team_plane"></label>
                                                        <label for="team_plane" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="team_plane2" name="" class="required"
                                                               wire:model="team_plane"
                                                               value="0" >
                                                        <label class="radio" for="team_plane2"></label>
                                                        <label for="team_plane2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('team_plane') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong> لدي المركز أنشطة تنموية مستديمة لا ترتبط
                                                بالأزمات فقط</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_active" name="" class="required"
                                                               wire:model="center_active"
                                                               value="1" >
                                                        <label class="radio" for="center_active"></label>
                                                        <label for="center_active" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_active2" name="" class="required"
                                                               wire:model="center_active"
                                                               value="0" >
                                                        <label class="radio" for="center_active2"></label>
                                                        <label for="center_active2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('center_active2') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما مدى تقييمك لهذه الانشطة ؟ </label>
                                            <div class="input-group mb-3">
                                                <select name="" wire:model="activity_report" id="" class="form-select fl-select">
                                                    <option value="جيد جدا">
                                                        جيد جدا
                                                    </option>

                                                    <option value="جيد">
                                                        جيد
                                                    </option>

                                                    <option value="لا استطيع التحديد">
                                                        لا استطيع التحديد
                                                    </option>

                                                    <option value="سيء">
                                                        سيء
                                                    </option>

                                                    <option value="سيء جدا">
                                                        سيء جدا
                                                    </option>
                                                </select>
                                                <div>@error('activity_report') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <!-- /review_block-->

                                    </div>
                                    <!-- /step 3-->
                                    <!-- الشيت 4  -->
                                    <div class="step">

                                        <h3 class="main_question mb-4"><strong> يعمل المركز علي إلي إيجاد فرص للتعاون والتنسيق
                                                بين الأطراف المختلفة لخدمة المناطق والفئات المستهدفة </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="difference_cooperate" name="" class="required"
                                                               wire:model="difference_cooperate"
                                                               value="1" >
                                                        <label class="radio" for="difference_cooperate"></label>
                                                        <label for="difference_cooperate" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="difference_cooperate2" name="" class="required"
                                                               wire:model="difference_cooperate"
                                                               value="0" >
                                                        <label class="radio" for="difference_cooperate2"></label>
                                                        <label for="difference_cooperate2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('difference_cooperate') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong> اعتماد سياسات ضابطة في توزيع المساعدات وصولا
                                                لكافة الفئات المستهدفة</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="root_help" name="" class="required"
                                                               wire:model="root_help"
                                                               value="1" >
                                                        <label class="radio" for="root_help"></label>
                                                        <label for="root_help" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="root_help2" name="" class="required"
                                                               wire:model="root_help"
                                                               value="0" >
                                                        <label class="radio" for="root_help2"></label>
                                                        <label for="root_help2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('root_help') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>هل السياسة الضابطة تتسم بالشفافية والعدالة
                                                ؟ </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="root_is_fare" name="" class="required"
                                                               wire:model="root_is_fare"
                                                               value="1" >
                                                        <label class="radio" for="root_is_fare"></label>
                                                        <label for="root_is_fare" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="root_is_fare2" name="" class="required"
                                                               wire:model="root_is_fare"
                                                               value="0" >
                                                        <label class="radio" for="root_is_fare2"></label>
                                                        <label for="root_is_fare2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('root_is_fare') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما تقييمك لهذه السياسة ؟ </label>
                                            <div class="input-group mb-3">
                                                <select wire:model="root_rate" name="" id="" class="form-select fl-select">
                                                    <option value="جيد جدا">
                                                        جيد جدا
                                                    </option>

                                                    <option value="جيد">
                                                        جيد
                                                    </option>

                                                    <option value="لا استطيع التحديد">
                                                        لا استطيع التحديد
                                                    </option>

                                                    <option value="سيء">
                                                        سيء
                                                    </option>

                                                    <option value="سيء جدا">
                                                        سيء جدا
                                                    </option>
                                                </select>
                                                <div>@error('root_rate') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <h3 class="main_question mb-4"><strong> تنوع المساعدات المقدمة للمستهدفين بما يتناسب
                                                واحتياجاتهم الفعلية</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="many_help" name="" class="required"
                                                               wire:model="many_help"
                                                               value="1" >
                                                        <label class="radio" for="many_help"></label>
                                                        <label for="many_help" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="many_help2" name="" class="required"
                                                               wire:model="many_help"
                                                               value="0" >
                                                        <label class="radio" for="many_help2"></label>
                                                        <label for="many_help2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('many_help') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما تقييمك لهذه المساعدات ؟ </label>
                                            <div class="input-group mb-3">
                                                <select name="" wire:model="help_rate" id="" class="form-select fl-select">
                                                    <option value="جيد جدا">
                                                        جيد جدا
                                                    </option>

                                                    <option value="جيد">
                                                        جيد
                                                    </option>

                                                    <option value="لا استطيع التحديد">
                                                        لا استطيع التحديد
                                                    </option>

                                                    <option value="سيء">
                                                        سيء
                                                    </option>

                                                    <option value="سيء جدا">
                                                        سيء جدا
                                                    </option>
                                                </select>
                                                <div>@error('help_rate') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>يعمل المركز علي تعظيم الاستفادة من الموارد
                                                المتاحة </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="works_to_maximize" name="" class="required"
                                                               wire:model="works_to_maximize"
                                                               value="1" >
                                                        <label class="radio" for="works_to_maximize"></label>
                                                        <label for="works_to_maximize" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="works_to_maximize3" name="" class="required"
                                                               wire:model="works_to_maximize"
                                                               value="0" >
                                                        <label class="radio" for="works_to_maximize3"></label>
                                                        <label for="works_to_maximize3" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('works_to_maximize') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong> لدي المركز حصة كافية من الاستخدامات سواء
                                                البطاطين أو التجهيزات الاغاثية </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_tools" name="" class="required"
                                                               wire:model="center_tools"
                                                               value="1" >
                                                        <label class="radio" for="center_tools"></label>
                                                        <label for="center_tools" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_tools2" name="" class="required"
                                                               wire:model="center_tools"
                                                               value="0" >
                                                        <label class="radio" for="center_tools2"></label>
                                                        <label for="center_tools2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('center_tools') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>لدي المركز خطط بديلة لتوفير المواد الاغاثية
                                                لمجابهة الأزمات </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="alternative_plans" name="" class="required"
                                                               wire:model="alternative_plans"
                                                               value="1" >
                                                        <label class="radio" for="alternative_plans"></label>
                                                        <label for="alternative_plans" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="alternative_plans2" name="" class="required"
                                                               wire:model="alternative_plans"
                                                               value="0" >
                                                        <label class="radio" for="alternative_plans2"></label>
                                                        <label for="alternative_plans2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('alternative_plans') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما تقييمك لهذه المساعدات ؟</label>
                                            <div class="input-group mb-3">
                                                <select name="" wire:model="rate_center_tools" id="" class="form-select fl-select">
                                                    <option value="جيد جدا">
                                                        جيد جدا
                                                    </option>

                                                    <option value="جيد">
                                                        جيد
                                                    </option>

                                                    <option value="لا استطيع التحديد">
                                                        لا استطيع التحديد
                                                    </option>

                                                    <option value="سيء">
                                                        سيء
                                                    </option>

                                                    <option value="سيء جدا">
                                                        سيء جدا
                                                    </option>
                                                </select>
                                                <div>@error('rate_center_tools') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>لدي المركز فريق مدرب وبكفاءة على إدارة الأزمات
                                                والكوارث</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_team" name="" class="required"
                                                               wire:model="center_team"
                                                               value="1" >
                                                        <label class="radio" for="center_team"></label>
                                                        <label for="center_team" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_team2" name="" class="required"
                                                               wire:model="center_team"
                                                               value="0" >
                                                        <label class="radio" for="center_team2"></label>
                                                        <label for="center_team2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('center_team') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>يهتم المركز بالاستفادة من متطوعي المناطق في نطاق
                                                عمله لمجابهة الأزمات </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_benefit" name="" class="required"
                                                               wire:model="center_benefit"
                                                               value="1" >
                                                        <label class="radio" for="center_benefit"></label>
                                                        <label for="center_benefit" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_benefit3" name="" class="required"
                                                               wire:model="center_benefit"
                                                               value="0" >
                                                        <label class="radio" for="center_benefit3"></label>
                                                        <label for="center_benefit3" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('center_benefit') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>يعمل المركز علي التنسيق مع الجهات الأخرى لضمان
                                                وصول تدخلاته لمستحقيها</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_coordinate" name="" class="required"
                                                               wire:model="center_coordinate"
                                                               value="1" >
                                                        <label class="radio" for="center_coordinate"></label>
                                                        <label for="center_coordinate" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_coordinate2" name="" class="required"
                                                               wire:model="center_coordinate"
                                                               value="0" >
                                                        <label class="radio" for="center_coordinate2"></label>
                                                        <label for="center_coordinate2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('center_coordinate') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما تقييمك لهذا التنسيق؟</label>
                                            <div class="input-group mb-3">
                                                <select wire:model="coordinate_rate" name="" id="" class="form-select fl-select">
                                                    <option value="جيد جدا">
                                                        جيد جدا
                                                    </option>

                                                    <option value="جيد">
                                                        جيد
                                                    </option>

                                                    <option value="لا استطيع التحديد">
                                                        لا استطيع التحديد
                                                    </option>

                                                    <option value="سيء">
                                                        سيء
                                                    </option>

                                                    <option value="سيء جدا">
                                                        سيء جدا
                                                    </option>
                                                </select>
                                                <div>@error('coordinate_rate') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>تتوفر لدي المركز معدات متطورة للتعامل مع الأزمات
                                                والكوارث </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="good_equipment" name="" class="required"
                                                               wire:model="good_equipment"
                                                               value="1" >
                                                        <label class="radio" for="good_equipment"></label>
                                                        <label for="good_equipment" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="good_equipment2" name="" class="required"
                                                               wire:model="good_equipment"
                                                               value="0" >
                                                        <label class="radio" for="good_equipment2"></label>
                                                        <label for="good_equipment2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('good_equipment') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


{{--                                    </div>--}}
                                    <!-- /step 4-->

                                    <!-- الشيت الخامس  -->

{{--                                    <div class="step">--}}

                                        <h3 class="main_question mb-4"><strong>يمتلك المركز فريق ذوي كفاءة على إدارة قواعد
                                                البيانات والتوظيف الأمثل لها</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="good_team_data" name="" class="required"
                                                               wire:model="good_team_data"
                                                               value="1" >
                                                        <label class="radio" for="good_team_data"></label>
                                                        <label for="good_team_data" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="good_team_data2" name="" class="required"
                                                               wire:model="good_team_data"
                                                               value="0" >
                                                        <label class="radio" for="good_team_data2"></label>
                                                        <label for="good_team_data2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('good_team_data') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>هل يتلقى هذا الفريق دورات تدريبية لرفع كفائته من
                                                حين لآخر </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="training_course" name="" class="required"
                                                               wire:model="training_course"
                                                               value="1" >
                                                        <label class="radio" for="training_course"></label>
                                                        <label for="training_course" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="training_course2" name="" class="required"
                                                               wire:model="training_course"
                                                               value="0" >
                                                        <label class="radio" for="training_course2"></label>
                                                        <label for="training_course2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('training_course') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>اعتماد سياسات ضابطة في توزيع المساعدات وصولا
                                                لكافة الفئات المستهدفة</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="adopting_controlled" name="" class="required"
                                                               wire:model="adopting_controlled"
                                                               value="1" >
                                                        <label class="radio" for="adopting_controlled"></label>
                                                        <label for="adopting_controlled" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="adopting_controlled2" name="" class="required"
                                                               wire:model="adopting_controlled"
                                                               value="0" >
                                                        <label class="radio" for="adopting_controlled2"></label>
                                                        <label for="adopting_controlled2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('adopting_controlled') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما تقييمك لهذه السياسات من حيث قدرتها على تحقيق العدالة في توزيع
                                                المساعدات ؟</label>
                                            <div class="input-group mb-3">
                                                <select name="" wire:model="adopting_rate" id="" class="form-select fl-select">
                                                    <option value="جيد جدا">
                                                        جيد جدا
                                                    </option>

                                                    <option value="جيد">
                                                        جيد
                                                    </option>

                                                    <option value="لا استطيع التحديد">
                                                        لا استطيع التحديد
                                                    </option>

                                                    <option value="سيء">
                                                        سيء
                                                    </option>

                                                    <option value="سيء جدا">
                                                        سيء جدا
                                                    </option>
                                                </select>
                                                <div>@error('adopting_rate') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>تنويع المساعدات المقدمة للمستهدفين بما يتناسب
                                                واحتياجاتهم الفعلية</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="assistance_provided" name="" class="required"
                                                               wire:model="assistance_provided"
                                                               value="1" >
                                                        <label class="radio" for="assistance_provided"></label>
                                                        <label for="assistance_provided" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="assistance_provided2" name="" class="required"
                                                               wire:model="assistance_provided"
                                                               value="0" >
                                                        <label class="radio" for="assistance_provided2"></label>
                                                        <label for="assistance_provided2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('assistance_provided') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>يمتلك المركز الامكانات التقنية التي تدعم وتطور من
                                                منظومة العمل</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_techcenter_tech" name="" class="required"
                                                               wire:model="center_tech"
                                                               value="1" >
                                                        <label class="radio" for="center_techcenter_tech"></label>
                                                        <label for="center_techcenter_tech" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_tech2" name="" class="required"
                                                               wire:model="center_tech"
                                                               value="0" >
                                                        <label class="radio" for="center_tech2"></label>
                                                        <label for="center_tech2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('center_tech') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>يوجد بالمركز نظام للمتابعة والتقييم (القياس–
                                                التحليل- تقرير عن نتائج التحليل والتوصيات)</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="follow_up" name="" class="required"
                                                               wire:model="follow_up"
                                                               value="1" >
                                                        <label class="radio" for="follow_up"></label>
                                                        <label for="follow_up" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="follow_up2" name="" class="required"
                                                               wire:model="follow_up"
                                                               value="0" >
                                                        <label class="radio" for="follow_up2"></label>
                                                        <label for="follow_up2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('follow_up') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>تم وضع نظام للمتابعة والتقييم من خلال خبير
                                                بالمجال ؟ </strong></h3>
                                        <div class="review_block">

                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="evaluation_system" name="" class="required"
                                                               wire:model="evaluation_system"
                                                               value="1" >
                                                        <label class="radio" for="evaluation_system"></label>
                                                        <label for="evaluation_system" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="evaluation_system2" name="" class="required"
                                                               wire:model="evaluation_system"
                                                               value="0" >
                                                        <label class="radio" for="evaluation_system2"></label>
                                                        <label for="evaluation_system2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('evaluation_system') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong> لدي المركز رؤية للتحديات التي تواجهه في تقديم
                                                الخدمات للمستفيدين</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_vision" name="" class="required"
                                                               wire:model="center_vision"
                                                               value="1" >
                                                        <label class="radio" for="center_vision"></label>
                                                        <label for="center_vision" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_vision2" name="" class="required"
                                                               wire:model="center_vision"
                                                               value="0" >
                                                        <label class="radio" for="center_vision2"></label>
                                                        <label for="center_vision2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('center_vision') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما هي درجة صعوبة التحديات </label>
                                            <div class="input-group mb-3">
                                                <select name="" wire:model="difficult_challenges" id="" class="form-select fl-select">
                                                    <option value="صعبة جدا">
                                                        صعبة جدا
                                                    </option>

                                                    <option value=" صعبة">
                                                        صعبة
                                                    </option>

                                                    <option value="عادية">
                                                        عادية
                                                    </option>

                                                    <option value="سهلة">
                                                        سهلة
                                                    </option>

                                                    <option value="سهلة جدا">
                                                        سهلة جدا
                                                    </option>
                                                </select>
                                                <div>@error('difficult_challenges') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>يستفيد المركز من الخبرات والتجارب السابقة في
                                                مجابهة الأزمات والكوارث</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="previous_expertise" name="" class="required"
                                                               wire:model="previous_expertise"
                                                               value="1" >
                                                        <label class="radio" for="previous_expertise"></label>
                                                        <label for="previous_expertise" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="previous_expertise2" name="" class="required"
                                                               wire:model="previous_expertise"
                                                               value="0" >
                                                        <label class="radio" for="previous_expertise2"></label>
                                                        <label for="previous_expertise2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('previous_expertise') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>يعمل المركز علي تقديم الدعم للشركاء للقيام بدورهم
                                                فى تنفيذ المهام الخاصة بهم</strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_partners" name="" class="required"
                                                               wire:model="center_partners"
                                                               value="1" >
                                                        <label class="radio" for="center_partners"></label>
                                                        <label for="center_partners" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_partners2" name="" class="required"
                                                               wire:model="center_partners"
                                                               value="0" >
                                                        <label class="radio" for="center_partners2"></label>
                                                        <label for="center_partners2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('center_partners') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما تقييمك لهذا الدعم ؟ </label>
                                            <div class="input-group mb-3">
                                                <select name="" wire:model="rate_support" id="" class="form-select fl-select">
                                                    <option value="جيد جدا">
                                                        جيد جدا
                                                    </option>

                                                    <option value="جيد">
                                                        جيد
                                                    </option>

                                                    <option value="لا استطيع التحديد">
                                                        لا استطيع التحديد
                                                    </option>

                                                    <option value="سيء">
                                                        سيء
                                                    </option>

                                                    <option value="سيء جدا">
                                                        سيء جدا
                                                    </option>
                                                </select>
                                                <div>@error('rate_support') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <h3 class="main_question mb-4"><strong>لدي المركز القدرة على توثيق الأنشطة والتدخلات
                                                التي ينفذها وحتي المخططة </strong></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_ability" name="" class="required"
                                                               wire:model="center_ability"
                                                               value="1" >
                                                        <label class="radio" for="center_ability"></label>
                                                        <label for="center_ability" class="wrapper">نعم</label>
                                                    </div>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="center_ability2" name="" class="required"
                                                               wire:model="center_ability"
                                                               value="0" >
                                                        <label class="radio" for="center_ability2"></label>
                                                        <label for="center_ability2" class="wrapper">لا</label>
                                                    </div>
                                                    <div>@error('center_ability') {{ $message }} @enderror</div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> قدرة المركز على عرض أنشطته وانجازاته باستخدام تكونولوجيا المعلومات
                                                ؟ </label>
                                            <div class="input-group mb-3">
                                                <select name="" wire:model="center_technology" id="" class="form-select fl-select">
                                                    <option value="جيد جدا">
                                                        جيد جدا
                                                    </option>

                                                    <option value="جيد">
                                                        جيد
                                                    </option>

                                                    <option value="لا استطيع التحديد">
                                                        لا استطيع التحديد
                                                    </option>

                                                    <option value="سيء">
                                                        سيء
                                                    </option>

                                                    <option value="سيء جدا">
                                                        سيء جدا
                                                    </option>
                                                </select>
                                                <div>@error('center_technology') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="job"> ما الصعوبات التي تواجه مراكز الاغاثة في تحقيق الاستجابة الفعالة
                                                والسريعة للأزمات والكوارث؟</label>
                                            <div class="input-group mb-3">
                                                <select name="" wire:model="center_speed" id="" class="form-select fl-select">
                                                    <option value="قلة الإمكانيات المتاحة">
                                                        قلة الإمكانيات المتاحة
                                                    </option>

                                                    <option value="عدم توفر وسائل الاتصال المناسبة">
                                                        عدم توفر وسائل الاتصال المناسبة
                                                    </option>

                                                    <option value="عدم توفر القدرة المالية">
                                                        عدم توفر القدرة المالية
                                                    </option>

                                                    <option value="قلة الخبرة المتاحة">
                                                        قلة الخبرة المتاحة
                                                    </option>

                                                    <option value=" اخرى – تذكر">
                                                        اخرى – تذكر
                                                    </option>
                                                </select>
                                                <div>@error('center_speed') {{ $message }} @enderror</div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="suggestion"> ما المقترحات التي من شأنها تحقيق الاستجابة الفعالة والسريعة
                                                للأزمات والكوارث؟</label>
                                            <input type="text" wire:model="universe" name="suggestion" id="suggestion" class="form-control">
                                        </div>
                                        <div>@error('universe') {{ $message }} @enderror</div>
                                    </div>

                                </div>
                                <!-- /step 5-->

                                <!-- الشيت السادس  -->
                                <!-- start 6  -->

                                <div class="step" style="display: none">


                                    <h3 class="main_question mb-4"><strong> هل يوجد مدونة سلوك واضحة في المركز الإغاثة </strong>
                                    </h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           >
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           >
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد نظام معلومات محدث يتعلق بإدارة الأزمات والكوارث
                                            لتقييم الوضع الراهن بعد كل أزمة أو كارثة إنسانية </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           >
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           >
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يتضمن نظام مركز الإغاثة تصنيفات للبيانات (مصريين –
                                            جنسيات أخرى) </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد لدى المركز بيان موثق عن ميثاق العمل الانساني
                                            خلال الأزمات والكوارث </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد لدى المركز مبادىء واضحة للحماية </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يتضمن المركز نظام لمساءلة العاملين في
                                            الإغاثة </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد لدى المركز قدرات فنية في مجال الإمداد بالماء
                                            والاصحاح والنظافة الشخصية خلال الأزمات والكوارث </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد دليل عمل بالمركز عن مجال الإمداد بالماء والاصحاح
                                            والنظافة الشخصية خلال الأزمات والكوارث معتمد من وزارة التضامن الاجتماعي </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد دليل عمل بالمركز عن مجال إدرة المخلفات في مناطق
                                            الايواء خلال الأزمات والكوارث معتمد من وزارة التضامن الاجتماعي </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد دليل لدى مراكز الإغاثة معتمد من وزارة التضامن
                                            الاجتماعي عن الأمن الغذائي والتغذية للمتضررين خلال الأزمات والكوارث
                                        </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد بروتكولات على مستوى المحافظات لدى مراكز الإغاثة
                                            معتمدة من وزارة التضامن الاجتماعي عن الأمن الغذائي والتغذية للمتضررين خلال الأزمات
                                            والكوارث </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد دليل لدى مراكز الإغاثة معتمد من وزارة التضامن
                                            الاجتماعي عن تغذية الرضع والأطفال للمتضررين خلال الأزمات والكوارث </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد دليل لدى مراكز الإغاثة معتمد من وزارة التضامن
                                            الاجتماعي عن المساعدات الغذائية ومصادرها وجودتها للمتضررين خلال الأزمات
                                            والكوارث </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد دليل لدى مراكز الإغاثة معتمد من وزارة التضامن
                                            الاجتماعي عن سبل العيش للمتضررين خلال الأزمات والكوارث </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد دليل لدى مراكز الإغاثة معتمد من وزارة التضامن
                                            الاجتماعي عن شبكات الآمان الاجتماعي للمتضررين خلال الأزمات والكوارث </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد دليل لدى مراكز الإغاثة معتمد من وزارة التضامن
                                            الاجتماعي عن المأوى والمستوطنات البشرية والمساحة الآمنة للعيش للمتضررين خلال الأزمات
                                            والكوارث </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد دليل فني لدى مراكز الإغاثة معتمد من وزارة
                                            التضامن الاجتماعي عن الحماية من الطقس - التوطين – العيش بكرامة للمتضررين خلال الأزمات
                                            والكوارث </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد دليل فني لدى مراكز الإغاثة معتمد من وزارة
                                            التضامن الاجتماعي عن تدخلات السكان النازحين – السكان غير النازحين – السكان المتضررين
                                            بشكل غير مباشر - التوطين – العيش بكرامة للمتضررين خلال الأزمات والكوارث </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong>هل يوجد بروتكولات على مستوى المحافظات لدى مراكز الإغاثة
                                            معتمدة من وزارة التضامن الاجتماعي عن التدخلات الصحية للمتضريين من الأزمات والكوارث
                                            وتتضمن (تطعيمات الأطفال – علاج الأمراض السارية وغير السارية و الأمراض المزمنة والحالات
                                            الحرجة. </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد دليل فني لدى مراكز الإغاثة معتمد من وزارة
                                            التضامن الاجتماعي عن تدخلات الصحة وحصر الاحتياجات الصحية للمتضريين من الأزمات والكوارث
                                            وصيغ الإبلاغ لمديريات الصحة </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>


                                    <h3 class="main_question mb-4"><strong> هل يوجد دليل فني لدى مراكز الإغاثة معتمد من وزارة
                                            التضامن الاجتماعي عن أماكن التدخلات الصحة وحصر الاحتياجات الصحية للمتضريين من الأزمات
                                            والكوارث وصيغ وخريطة الخدمات الصحية على مستوى المحافظة </strong></h3>
                                    <div class="review_block">
                                        <ul>
                                            <li>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="yes" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="yes"></label>
                                                    <label for="yes" class="wrapper">نعم</label>
                                                </div>
                                                <div class="checkbox_radio_container">
                                                    <input type="radio" id="no" name="" class="required" value="No"
                                                           onchange="getVals(this, 'question_3');">
                                                    <label class="radio" for="no"></label>
                                                    <label for="no" class="wrapper">لا</label>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <!--  end /step 6-->

                            </form>

                        </div>
                        <!-- /middle-wizard -->
                    </div>
                    <!-- /Wizard container -->
                </div>
                <!-- /col -->
            </div>
        </div>
        <!-- /row -->
    </div>


</div>
