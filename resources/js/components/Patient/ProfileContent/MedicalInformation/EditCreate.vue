<template>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
          <h5><strong>IMPORTANT: PLEASE READ CAREFULLY</strong></h5>
          <p>Your medical information is very important in assessing your fitness to undergo any treatment or procedure.
            Please asnwer the following questions truthfully and accurately. All information shall be treated with
            strict confidentiality.
          </p>
        </div>
        <div class="col-md-12">
          <form @submit.prevent="submitInformation">
            <div class="form-group row">
              <div class="col-md-12 disease-radio">
                <label class="control-label">1. Do you have any existing disease or illness?</label>
                <div>
                  <input type="radio" name="question_1" value="Yes" v-model="medical_information_data.question_1"><label>Yes</label>
                </div>
                <div>
                  <input type="radio" name="question_1" value="No" v-model="medical_information_data.question_1"><label>No</label>
                </div>
                
              </div>
              
              <!-- Question Number 1: Start -->
              <transition name="fade">
                <template v-if="medical_information_data.question_1 === 'Yes'">
                  <div>
                    <div class="col-md-12 disease-checkbox">
                      <label>If yes, please check the diagnosis</label>
                      <div class="disease-diagnosis">
                        <label>
                          <input type="checkbox" value="Diabetes Mellitus" v-model="medical_information_data.diagnosis">
                          Diabetes Mellitus
                        </label>
                        <label>
                          <input type="checkbox" value="Bronchial Astma" v-model="medical_information_data.diagnosis">
                          Bronchial Astma
                        </label>
                        <label>
                          <input type="checkbox" value="Heart Disease" v-model="medical_information_data.diagnosis">
                          Heart Disease
                        </label>
                        <label>
                          <input type="checkbox" value="Hypertehnsion" v-model="medical_information_data.diagnosis">
                          Hypertehnsion
                        </label>
                        <label>
                          <input type="checkbox" value="Thyroid Disease" v-model="medical_information_data.diagnosis">
                          Thyroid Disease
                        </label>
                        <label>
                          <input type="checkbox" value="Bleeding Disorders" v-model="medical_information_data.diagnosis">
                          Bleeding Disorders
                        </label>
                        <label>
                          <input type="checkbox" value="Keloids" v-model="medical_information_data.diagnosis">
                          Keloids
                        </label>
                        <label>
                          <input type="checkbox" value="Epilepsy / Seizures" v-model="medical_information_data.diagnosis">
                          Epilepsy / Seizures
                        </label>
                        <label>
                          <input type="checkbox" value="Deep Vein Thrombosis" v-model="medical_information_data.diagnosis">
                          Deep Vein Thrombosis
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12 disease-checkbox">
                    <div class="form-group row">
                          <label class="control-label col-md-1">
                            <input type="checkbox" value="Yes" v-model="medical_information_data.allergies">
                              Allergies
                            </label>
                          <div class="col-md-11">
                              <input type="text" name="local_street_number" class="form-control" v-model="medical_information_data.allergies_details" :disabled="!medical_information_data.allergies" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="control-label col-md-1">Others</label>
                          <div class="col-md-11">
                              <input type="text" name="local_street_number" class="form-control" v-model="medical_information_data.allergies_others">
                          </div>
                      </div>
                    </div>
                  </div>
                </template>
              </transition>
              <!-- Question Number 1: End -->

            </div>
            <div class="form-group row">
              <div class="col-md-12 disease-radio">
                <label class="control-label">2. Have you undergone any surgical procedure/s before?</label>
                <div>
                  <input type="radio" name="question_2" value="Yes" v-model="medical_information_data.question_2"><label>Yes</label>
                </div>
                <div>
                  <input type="radio" name="question_2" value="No" v-model="medical_information_data.question_2"><label>No</label>
                </div>
              </div>
              
              <transition name="fade">
                <template v-if="medical_information_data.question_2 === 'Yes'">
                  <div class="col-md-12 disease-checkbox">
                    <label>If yes, what, when, and where was it performed?</label>
                    <div>
                      <textarea rows="5" class="form-control" v-model="medical_information_data.question_2_details" required></textarea>
                    </div>
                  </div>
                </template>
              </transition>

            </div>
            <div class="form-group row">
              <div class="col-md-12 disease-radio">
                <label class="control-label">3. Do you have any history of pacemaker insertion or any metal implants?</label>
                <div>
                  <input type="radio" name="question_3" value="Yes" v-model="medical_information_data.question_3"><label>Yes</label>
                </div>
                <div>
                  <input type="radio" name="question_3" value="No" v-model="medical_information_data.question_3"><label>No</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label class="control-label">4. Do you have a family history of the following?</label>
                <div class="row">
                  <div class="col-md-6 family-history">
                    <div class="disease-diagnosis disease-radio">
                      <label>
                        <input type="checkbox" value="Diabetes Mellitus" v-model="medical_information_data.question_9">
                        Diabetes Mellitus
                      </label>
                      <label>
                        <input type="checkbox" value="Bronchial Astma" v-model="medical_information_data.question_9">
                        Bronchial Astma
                      </label>
                      <label>
                        <input type="checkbox" value="Cancer" v-model="medical_information_data.question_9">
                        Cancer
                      </label>
                      <label>
                        <input type="checkbox" value="Hypertehnsion" v-model="medical_information_data.question_9">
                        Hypertehnsion
                      </label>
                      <label>
                        <input type="checkbox" value="Thyroid Disease" v-model="medical_information_data.question_9">
                        Thyroid Disease
                      </label>
                      <label>
                        <input type="checkbox" value="Acne" v-model="medical_information_data.question_9">
                        Acne
                      </label>
                      <label>
                        <input type="checkbox" value="Heart Disease" v-model="medical_information_data.question_9">
                        Heart Disease
                      </label>
                      <label>
                        <input type="checkbox" value="Bleeding Disorders" v-model="medical_information_data.question_9">
                        Bleeding Disorders
                      </label>
                      <label>
                        <input type="checkbox" value="Baldness" v-model="medical_information_data.question_9">
                        Baldness
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12 disease-radio">
                <label class="control-label">5. Do you drink alcoholic beverages?</label>
                <div>
                  <input type="radio" name="question_4" value="Yes" v-model="medical_information_data.question_4"><label>Yes, frequency and amount</label>
                </div>
                <div>
                  <input type="radio" name="question_4" value="No" v-model="medical_information_data.question_4"><label>No</label>
                </div>
              </div>
              
              <transition name="fade">
                <template v-if="medical_information_data.question_4 === 'Yes'">
                  <div class="col-md-12">
                    <input type="text" class="form-control" v-model="medical_information_data.question_4_details" required>
                  </div>
                </template>
              </transition>

            </div>
            <div class="form-group row">
              <div class="col-md-12 disease-radio">
                <label class="control-label">6. Have you ever taken any regulated drug or controlled substances?</label>
                <div>
                  <input type="radio" name="question_5" value="Yes" v-model="medical_information_data.question_5"><label>Yes</label>
                </div>
                <div>
                  <input type="radio" name="question_5" value="No" v-model="medical_information_data.question_5"><label>No</label>
                </div>
              </div>
              
              <transition name="fade">
                <template v-if="medical_information_data.question_5 === 'Yes'">
                  <div class="col-md-12 disease-checkbox">
                    <label>If yes, what drug/ controlled substance</label>
                    <div class="disease-diagnosis">
                      <input type="text" class="form-control"  v-model="medical_information_data.question_5_details" required>
                    </div>
                  </div>
                </template>
              </transition>

            </div>
            <div class="form-group row">
              <div class="col-md-12 disease-radio">
                <label class="control-label">7. Do you have any history of drug allergy or hypersensitivity?</label>
                <div>
                  <input type="radio" name="question_6" value="Yes" v-model="medical_information_data.question_6"><label>Yes</label>
                </div>
                <div>
                  <input type="radio" name="question_6" value="No" v-model="medical_information_data.question_6"><label>No</label>
                </div>
              </div>

              <transition name="fade">
                <template v-if="medical_information_data.question_6 === 'Yes'">
                  <div class="col-md-12 disease-checkbox">
                    <label>If yes, what drug/s?</label>
                    <div class="disease-diagnosis">
                      <input type="text" class="form-control" v-model="medical_information_data.question_6_details" required>
                    </div>
                  </div>
                </template>
              </transition>

            </div>
            <div class="form-group row">
              <div class="col-md-12 disease-radio">
                <label class="control-label">8. Do you have any any history of adverse reactions from any dematological prcedures including chemical peels, hormonal therapy,
                  laser, light, and radiofrequency treatments?
                </label>
                <div>
                  <input type="radio" name="question_7" value="Yes" v-model="medical_information_data.question_7"><label>Yes</label>
                </div>
                <div>
                  <input type="radio" name="question_7" value="No" v-model="medical_information_data.question_7"><label>No</label>
                </div>
              </div>
              
              <transition name="fade">
                <template v-if="medical_information_data.question_7 === 'Yes'">
                  <div class="col-md-12 disease-checkbox">
                    <label>If yes, from what procedure/s?</label>
                    <div class="disease-diagnosis">
                      <input type="text" class="form-control" v-model="medical_information_data.question_7_details" required>
                    </div>
                  </div>
                </template>
              </transition>

            </div>
            <div class="form-group row" v-if="patient.gender === 'Female'">
              <div class="col-md-12">
                <label>For female patients only:</label>
              </div>
              <div class="col-md-12 disease-radio">
                <label class="control-label">
                  9. Is there any possibility that you are pregnant?
                </label>
                <div>
                  <input type="radio" name="question_8" value="Yes" v-model="medical_information_data.question_8" required><label>Yes</label>
                </div>
                <div>
                  <input type="radio" name="question_8" value="No" v-model="medical_information_data.question_8" required><label>No</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label>ACKNOWLEDGEMENT</label>
              </div>
              <div class="col-md-12 disease-radio">
                <label class="control-label">
                  I acknolwedge that there is a need for my attending physician and/or his/her associates or staff to physically
                  examine and evaluate my condition; that all suits or cases of action arising from this and subsequent physician-patient
                  contract shall be filled exclusively in the courts of __________________ and that all personal and medical information I have given are true and correct.
                </label>
              </div>
              <!-- <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Please insert courts here...">
              </div> -->
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <button class="btn btn-primary" :disabled="save_button_disable">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    patient: {
      type: Object,
      required: true
    }
  },
  data() {
    return {
      host: window.location.origin,
      medical_information_data: {
        question_1: 'No',
        diagnosis: [],
        allergies: null,
        allergies_details: null,
        allergies_others: null,
        question_2: 'No',
        question_2_details: null,
        question_3: 'No',
        question_3_diagnosis: [],
        question_4: 'No',
        question_4_details: null,
        question_5: 'No',
        question_5_details: null,
        question_6: 'No',
        question_6_details: null,
        question_7: 'No',
        question_7_details: null,
        question_8: null,
        question_9: []
      },
      save_button_disable: false,
    }
  },
  created() {
    this.getPatientInfo()
  },
  mounted() {},
  methods: {
    getPatientInfo(){
      this.$http.get(`${this.host}/api/patients/${this.patient.id}`)
      .then(response => {
        if(response.data.patient.patient_medical_information != null){
          this.medical_information_data = response.data.patient.patient_medical_information.answers.medical_information
        }
      })
      .catch(error => console.log(error))
    },
    submitInformation() {
      this.save_button_disable = true;
      this.$swal({
          title: 'Save Medical Information?',
          text: "Please double check the details before submitting",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Save'
          }).then((result) => {
          if (result.value) {
              this.$http.post(`${this.host}/api/patient-medical-information`, {
                  medical_information: this.medical_information_data,
                  patient: this.patient
              })
              .then(response => {
                  this.save_button_disable = false;
                  this.$swal(
                      'Saved!',
                      'Medical Information saved successfully.',
                      'success'
                  )
                  setTimeout(() => {
                      if(window.location.pathname === '/patient/signup') {
                          window.location.href = `${this.host}/patient/signup`
                      } else {
                        this.$emit('close', response.data.patient)
                      }
                  }, 1000)
              })
              .catch(error => console.log(error))
          }
      })
    }
  },
}
</script>

<style lang="scss" scoped>
  p {
    text-align: justify;
  }
  .disease-radio {
    display: flex;
    div {
      margin: 0px 20px;
    }
  }

  .disease-checkbox {
    padding: 20px 40px;
  }
  
  .disease-diagnosis {
    padding: 10px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;

    label {
      width: 400px;
    }
  }

  .form-group {
    margin: 10px 0px;
  }

  textarea {
    width: 100%;
  }

  .family-history {
    .disease-diagnosis {
      padding: 10px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;

      label {
        width: 250px;
      }
    }
  }
</style>