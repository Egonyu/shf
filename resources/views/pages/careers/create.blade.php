@extends('pages.master')

@section('content')

    <div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

                    <div class="col-sm-12">
                        {{-- <form method="post" action="{{ route('careers.store') }}">
                            
                        
                           <table border="0" cellpadding="5" cellspacing="0">
                            @csrf
                              <tr>
                                 <td style="width:50%">
                                    <b>First name *</b><br />
                                    <input name="First_Name" type="text" maxlength="50" style="width:260px" />
                                 </td>
                                 <td style="width:50%">
                                    <b>Last name *</b><br />
                                    <input name="Last_Name" type="text" maxlength="50" style="width:260px" />
                                 </td>
                              </tr>
                              <tr>
                                 <td colspan="2">
                                    <b>Email *</b><br />
                                    <input name="Email_Address" type="text" maxlength="100" style="width:535px" />
                                 </td>
                              </tr>
                              <tr>
                                 <td colspan="2">
                                    <b>Portfolio website</b><br />
                                    <input name="Portfolio" type="text" maxlength="255" value="http://" style="width:535px" />
                                 </td>
                              </tr>
                              <tr>
                                 <td colspan="2">
                                    <b>Position you are applying for *</b><br />
                                    <input name="Position" type="text" maxlength="100" style="width:535px" />
                                 </td>
                              </tr>
                              <tr>
                                 <td style="width:50%">
                                    <b>Salary requirements</b><br />
                                    <input name="Salary" type="text" maxlength="50" style="width:260px" />
                                 </td>
                                 <td style="width:50%">
                                    <b>When can you start?</b><br />
                                    <input name="StartDate" type="text" maxlength="50" style="width:260px" />
                                 </td>
                              </tr>
                              <tr>
                                 <td style="width:50%">
                                    <b>Phone *</b><br />
                                    <input name="Phone" type="text" maxlength="50" style="width:260px" />
                                 </td>
                                 <td style="width:50%">
                                    <b>Fax</b><br />
                                    <input name="Fax" type="text" maxlength="50" style="width:260px" />
                                 </td>
                              </tr>
                              <tr>
                                 <td colspan="2">
                                    <b>Are you willing to relocate?</b><br />
                                    <input name="Relocate" type="radio" value="Yes" checked="checked" /> Yes &nbsp; &nbsp; &nbsp;
                                    <input name="Relocate" type="radio" value="No" /> No &nbsp; &nbsp; &nbsp;
                                    <input name="Relocate" type="radio" value="NotSure" /> Not sure
                                 </td>
                              </tr>
                              <tr>
                                 <td colspan="2">
                                    <b>Last company you worked for</b><br />
                                    <input name="Organization" type="text" maxlength="100" style="width:535px" />
                                 </td>
                              </tr>
                              <tr>
                                 <td colspan="2">
                                    <b>Reference / Comments / Questions</b><br />
                                    <textarea name="Reference" rows="7" cols="40" style="width:535px"></textarea>
                                 </td>
                              </tr>
                           </table>
                        </form> --}}

                            @if (session('status'))
		                        <div class="alert alert-success">
		                            {{ session('status') }}
		                        </div>
		                    @endif
		                    @if (session('warning'))
		                        <div class="alert alert-warning">
		                            {{ session('warning') }}
		                        </div>
		                    @endif
							<form method="post" action="{{ route('careers.store') }}" data-toggle="validator" novalidate="true">
								{{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" name="names" id="p_name" placeholder="Enter Name" required="">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input type="email" class="form-control" name="email" id="p_email" placeholder="Enter Email" required>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" name="address" id="p_address" placeholder="Enter Your Address" required>
                                            @if ($errors->has('address'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
                                                <input id="p_city" name="city" class="form-control" rows="6" placeholder="Enter Your city" required>
                                            @if ($errors->has('city'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('city') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
                                            <input type="text" name="state" class="form-control" id="p_state" placeholder="Enter state" required>
                                            @if ($errors->has('state'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('state') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                                                <input id="p_phone" name="phone" class="form-control" rows="6" placeholder="Enter Your phone" required>
                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('zip') ? ' has-error' : '' }}">
                                    <input id="p_zip" name="zip" class="form-control" rows="6" placeholder="Enter Your zip" required>
                                    @if ($errors->has('zip'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('zip') }}</strong>
                                       </span>
                                    @endif
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group {{ $errors->has('position') ? ' has-error' : '' }}">
                                            <input type="text" name="position" class="form-control" id="p_position" placeholder="Enter position" required="">
                                            @if ($errors->has('position'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('position') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group {{ $errors->has('employer') ? ' has-error' : '' }}">
                                            <input type="employer" name="employer" class="form-control" id="p_employer" placeholder="Enter employer" required>
                                            @if ($errors->has('employer'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('employer') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group {{ $errors->has('special_talent') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" name="special_talent" id="special_talent" placeholder="Any Special Talent" required>
                                            @if ($errors->has('special_talent'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('special_talent') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group {{ $errors->has('volunteering_field') ? ' has-error' : '' }}">
                                                <input id="volunteering_field" name="volunteering_field" class="form-control" rows="6" placeholder="Enter Field You want to Volunteer In.." required>
                                            @if ($errors->has('volunteering_field'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('volunteering_field') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group {{ $errors->has('physical_limitations') ? ' has-error' : '' }}">
                                            <input type="text" name="physical_limitations" class="form-control" id="physical_limitations" placeholder="Any Physical Disability?" required>
                                            @if ($errors->has('physical_limitations'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('physical_limitations') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group {{ $errors->has('emergency_contact') ? ' has-error' : '' }}">
                                                <input id="emergency_contact" name="emergency_contact" class="form-control" rows="6" placeholder="Enter Your Emergency Contact" required>
                                            @if ($errors->has('emergency_contact'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('emergency_contact') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-primary" value="Send Message" name="submit">SEND MESSAGE</button>
                                </div>
                            </form>
                    </div>

				</div>

			</div>
		</div>
	</div>
@endsection