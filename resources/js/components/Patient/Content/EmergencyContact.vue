<template>
  <div>
        <form @submit.prevent="submitEmergencyContactInformation">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="control-label col-md-3"><strong>Person to notify in case of Emergency</strong></label>
                        <div class="col-md-8">
                            <input type="text" name="emergency_contact_person" class="form-control" v-model="patientInfo['emergency_contact_person']" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3"><strong>Contact Number</strong></label>
                        <div class="col-md-8">
                            <input type="text" name="emergency_contact_number" class="form-control" v-model="patientInfo['emergency_contact_number']" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 button">
                    <button class="btn btn-primary" @click="previousPage">Previous</button>
                    <button class="btn btn-primary">Next</button>
                </div>
            </div>
        </form>
  </div>
</template>

<script>
export default {
    props: {
        patientInfo: {
            type: Object,
            required: true
        }
    },
    methods: {
        previousPage() {
            this.$emit('clickedPrevious')
        },
        submitEmergencyContactInformation() {
            this.$emit('submit')
        }
    }
}
</script>

<style lang="scss" scoped>
    .row {
        margin: 10px;
    }

    .button {
        display: flex;
        justify-content: flex-end;

        button {
            margin: 0px 10px;
        }
    }
</style>