
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Profile</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" value="{{ $cvProfile->first_name }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" value="{{ $cvProfile->last_name }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="{{ $cvProfile->email }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" value="{{ $cvProfile->phone }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="Job_Experience">Job Experience</label>
                        <input type="text" class="form-control" id="Job_Experience" value="{{ $cvProfile->Job_Experience }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="Education">Education</label>
                        <input type="text" class="form-control" id="Education" value="{{ $cvProfile->Education }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="Skills">Skills</label>
                        <input type="text" class="form-control" id="Skills" value="{{ $cvProfile->Skills }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="Languages">Languages</label>
                        <input type="text" class="form-control" id="Languages" value="{{ $cvProfile->Languages }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="Objective">Objective</label>
                        <textarea class="form-control" id="Objective" readonly>{{ $cvProfile->Objective }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

