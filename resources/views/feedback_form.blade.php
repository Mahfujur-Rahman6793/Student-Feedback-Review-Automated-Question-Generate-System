@extends('index')
  @section('style')
  @parent
  <link rel="stylesheet" href="css/student_form.css">
  @endsection
    @section('main')
    
        @parent
        <!-- Navigation -->
        @section('navbar')
        @parent
        @endsection

    @section('editable')
    <!-- edit here -->
    <div class="container-fluid">
    <div class="row text-center">
    <div class="col-md-12 dashhead">
    <marquee behavior="" direction="">Express your Feelings </marquee>
    <section>
       <div class="review">
            <div>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Bad
                        </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Below Average
                        </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Average
                        </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Improvement Needed
                        </label>
                </div>
            </div>
        <div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Good
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Better
                </label>
              </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Best
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                   Default checked radio
                </label>
              </div>
        </div>
       </div>
    </section>
    <section class="selection">
        <div class="select">
            <div>
                <label for="select_teacher" >Choose Your Teacher:</label>

                <select name="teachers" id="teacher">
                    <option value="">A</option>
                    <option value="">B</option>
                </select>
            </div>
            <div>
                <label for="select_subject">Subject:</label>

                <select name="subject" id="subject">
                    <option value="">miraz</option>
                    <option value="">n</option>
                </select>
            </div>
        </div>
        
    </section>
    <section class="commit">
        <textarea name="" id="comment" cols="50%" rows="5" placeholder="Write some thing about Your Teacher"></textarea>
        <div>
            <button type="submit" class="submit">Submit</button>
        </div>
    </section>
    </div>
    </div>
    </div>
<!-- // -->

    @endsection
    
    @endsection
   
    @section('script')
    @parent
    @endsection
