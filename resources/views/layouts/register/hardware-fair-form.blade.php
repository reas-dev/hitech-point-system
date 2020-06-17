<div class="tab-pane fade shadow p-5 mt-4" id="pills-hf" role="tabpanel" aria-labelledby="pills-hf-tab">
    <form action="{{ url('register/hardware-fair') }}" method="POST">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('hf_project_title') omrs-input-danger @enderror">
                        <input type="text" name="hf_project_title" value="{{ old('hf_project_title') }}" required>
                        <span class="omrs-input-label">Judul Alat</span>
                        @error('hf_project_title')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">layers</i>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('hf_school') omrs-input-danger @enderror">
                        <input type="text" name="hf_school" value="{{ old('hf_school') }}" required>
                        <span class=" omrs-input-label">Asal Kampus</span>
                        @error('hf_school')
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
                    <label class="omrs-input-underlined @error('hf_lead_name') omrs-input-danger @enderror">
                        <input type="text" name="hf_lead_name" value="{{ old('hf_lead_name') }}" required>
                        <span class=" omrs-input-label">Nama Ketua</span>
                        @error('hf_lead_name')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">person</i>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('hf_lead_student_id') omrs-input-danger @enderror">
                        <input type="text" name="hf_lead_student_id" value="{{ old('hf_lead_student_id') }}" required>
                        <span class=" omrs-input-label">NIM Ketua</span>
                        @error('hf_lead_student_id')
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
                    <label class="omrs-input-underlined @error('hf_member_name') omrs-input-danger @enderror">
                        <input type="text" name="hf_member_name" value="{{ old('hf_member_name') }}" required>
                        <span class="omrs-input-label">Nama Anggota</span>
                        @error('hf_member_name')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">people</i>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('hf_member_student_id') omrs-input-danger @enderror">
                        <input type="text" name="hf_member_student_id" value="{{ old('hf_member_student_id') }}"
                            required>
                        <span class="omrs-input-label">NIM Anggota</span>
                        @error('hf_member_student_id')
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
                    <label class="omrs-input-underlined @error('hf_phone') omrs-input-danger @enderror">
                        <input type="text" name="hf_phone" value="{{ old('hf_phone') }}" required>
                        <span class="omrs-input-label">Nomor Whatsapp</span>
                        @error('hf_phone')
                        <span class="omrs-input-helper">{{ $message }}</span>
                        @enderror
                        <i class="material-icons">message</i>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="omrs-input-group">
                    <label class="omrs-input-underlined @error('hf_email') omrs-input-danger @enderror">
                        <input type="email" name="hf_email" value="{{ old('hf_email') }}" required>
                        <span class="omrs-input-label">Email</span>
                        @error('hf_email')
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
