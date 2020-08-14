<template>
  <div>
        <form @submit.prevent="submitForeignAddress">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Address</label>
                        <div class="col-md-10">
                            <input type="text" name="foreign_address" class="form-control" v-model="patientInfo['foreign_address']">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">No./ Street</label>
                        <div class="col-md-10">
                            <input type="text" name="foreign_street_number" class="form-control" v-model="patientInfo['foreign_street_number']">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Brgy./ Subdivision</label>
                        <div class="col-md-10">
                            <input type="text" name="foreign_subdivision" class="form-control" v-model="patientInfo['foreign_subdivision']">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">City/ Town</label>
                        <div class="col-md-10">
                            <input type="text" name="foreign_subdivision" class="form-control" v-model="patientInfo['foreign_city']">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Country</label>
                        <div class="col-md-10">
                            <input type="text" name="foreign_subdivision" class="form-control" v-model="patientInfo['foreign_country']">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Telephone No.</label>
                        <div class="col-md-10">
                            <input type="text" name="foreign_subdivision" class="form-control" v-model="patientInfo['foreign_telephone_number']">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Postal Code</label>
                        <div class="col-md-10">
                            <input type="text" name="foreign_postal_code" class="form-control" v-model="patientInfo['foreign_postal_code']">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Fax No.</label>
                        <div class="col-md-10">
                            <input type="text" name="foreign_fax_number" class="form-control" v-model="patientInfo['foreign_fax_number']">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Email</label>
                        <div class="col-md-10">
                            <input type="text" name="foreign_email" class="form-control" v-model="patientInfo['foreign_email']">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row preferred-mailing-address">
                <label class="control-label col-md-3">Preferred Mailing Address</label>
                <div class="col-md-5 d-flex preferred-info">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Philippine Address" v-model="patientInfo['local_email']">
                        <label class="form-check-label" for="inlineRadio1">Philippine Address</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Foreign Address" v-model="patientInfo['local_email']">
                        <label class="form-check-label" for="inlineRadio2">Foreign Address</label>
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
        submitForeignAddress() {
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