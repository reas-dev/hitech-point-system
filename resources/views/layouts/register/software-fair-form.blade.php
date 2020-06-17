<div class="tab-pane fade show active shadow p-5 mt-4" id="pills-sf" role="tabpanel" aria-labelledby="pills-sf-tab">
    <form action="{{ url('register/software-fair') }}" method="POST">
        @csrf
        @method('POST')
        <div class="row justify-content-between">
            <div class="col-4 mb-3">
                <p class="radio-label">Kategori Aplikasi</p>
            </div>
            <div class="col text-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="web" name="app_cat" value="web" @if(old('app_cat')=='web' ) checked @endif
                        class="custom-control-input">
                    <label class="custom-control-label" for="web">Web</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="mobile" name="app_cat" value="mobile" @if(old('app_cat')=='mobile' ) checked
                        @endif class="custom-control-input">
                    <label class="custom-control-label" for="mobile">Mobile</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="game" name="app_cat" value="game" @if(old('app_cat')=='game' ) checked
                        @endif class="custom-control-input">
                    <label class="custom-control-label" for="game">Game</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('project_title') omrs-input-danger @enderror">
                        <input type=" text" name="project_title" value="{{ old('project_title') }}" required>
                        <span class="omrs-input-label">Judul Aplikasi</span>
                        @error('project_title')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">layers</i>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('school') omrs-input-danger @enderror">
                        <input type="text" name="school" value="{{ old('school') }}" required>
                        <span class=" omrs-input-label">Asal Kampus</span>
                        @error('school')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">school</i>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('lead_name') omrs-input-danger @enderror">
                        <input type="text" name="lead_name" value="{{ old('lead_name') }}" required>
                        <span class=" omrs-input-label">Nama Ketua</span>
                        @error('lead_name')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">person</i>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('lead_student_id') omrs-input-danger @enderror">
                        <input type="text" name="lead_student_id" value="{{ old('lead_student_id') }}" required>
                        <span class=" omrs-input-label">NIM Ketua</span>
                        @error('lead_student_id')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">image_aspect_ratio</i>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('member_name') omrs-input-danger @enderror">
                        <input type="text" name="member_name" value="{{ old('member_name') }}" required>
                        <span class="omrs-input-label">Nama Anggota</span>
                        @error('member_name')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">people</i>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('member_student_id') omrs-input-danger @enderror">
                        <input type="text" name="member_student_id" value="{{ old('member_student_id') }}" required>
                        <span class="omrs-input-label">NIM Anggota</span>
                        @error('member_student_id')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">image_aspect_ratio</i>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('phone') omrs-input-danger @enderror">
                        <input type="text" name="phone" value="{{ old('phone') }}" required>
                        <span class="omrs-input-label">Nomor Whatsapp</span>
                        @error('phone')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">message</i>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('email') omrs-input-danger @enderror">
                        <input type="email" name="email" value="{{ old('email') }}" required>
                        <span class="omrs-input-label">Email</span>
                        @error('email')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">email</i>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <button class="mx-auto px-5 shadow-purp btn-register" type="submit">Register</button>
            </div>
        </div>
    </form>
</div>
