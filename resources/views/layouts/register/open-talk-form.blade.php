<div class="tab-pane fade shadow p-5 mt-4" id="pills-ot" role="tabpanel" aria-labelledby="pills-ot-tab">
    <form action="{{ url('register/open-talk') }}" method="POST">
        @csrf
        @method('POST')
        <div class="row justify-content-between">
            <div class="col-4 mb-3">
                <p class="radio-label">Kategori Peserta</p>
            </div>
            <div class="col text-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="radioMhs" checked name="ot_category" value="student"
                        @if(old('ot_category')=='student' ) checked @endif class="custom-control-input">
                    <label class="custom-control-label" for="radioMhs">Mahasiswa</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="radioUmum" name="ot_category" value="general"
                        @if(old('ot_category')=='general' ) checked @endif class="custom-control-input">
                    <label class="custom-control-label" for="radioUmum">Umum</label>
                </div>
            </div>
        </div>
        <div class="omrs-input-group">
            <label class="omrs-input-underlined @error('ot_name') omrs-input-danger @enderror">
                <input type="text" name="ot_name" value="{{ old('ot_name') }}" required>
                <span class="omrs-input-label">Nama</span>
                @error('ot_name')
                <span class="omrs-input-helper">{{ $message }}</span>
                @enderror
                <i class="material-icons">person</i>
            </label>
        </div>
        <div class="row" id="mahasiswa">
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('ot_school') omrs-input-danger @enderror">
                        <input id="inputSchool" type="text" name="ot_school" value="{{ old('ot_school') }}" required>
                        <span class="omrs-input-label">Asal Kampus</span>
                        @error('ot_school')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">school</i>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('ot_student_id') omrs-input-danger @enderror">
                        <input id="inputStudentId" type="text" name="ot_student_id" value="{{ old('ot_student_id') }}"
                            required>
                        <span class="omrs-input-label">NIM</span>
                        @error('ot_student_id')
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
                    <label class="omrs-input-underlined @error('ot_phone') omrs-input-danger @enderror">
                        <input type="text" name="ot_phone" value="{{ old('ot_phone') }}" required>
                        <span class="omrs-input-label">Nomor Whatsapp</span>
                        @error('ot_phone')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">message</i>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('ot_email') omrs-input-danger @enderror">
                        <input type="email" name="ot_email" value="{{ old('ot_email') }}" required>
                        <span class="omrs-input-label">Email</span>
                        @error('ot_email')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">email</i>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <button class="mx-auto shadow-purp btn-register" type="submit">Register</button>
            </div>
        </div>
    </form>
</div>
