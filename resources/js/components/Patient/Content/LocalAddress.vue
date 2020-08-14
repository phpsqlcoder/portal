<template>
  <div>
        <form @submit.prevent="submitLocalAddress">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Address</label>
                        <div class="col-md-10">
                            <input type="text" name="local_address" class="form-control" v-model="patientInfo['local_address']" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">No./ Street</label>
                        <div class="col-md-10">
                            <input type="text" name="local_street_number" class="form-control" v-model="patientInfo['local_street_number']" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Brgy./ Subdivision</label>
                        <div class="col-md-10">
                            <input type="text" name="local_subdivision" class="form-control" v-model="patientInfo['local_subdivision']" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">City/ Town</label>
                        <div class="col-md-10">
                            <input type="text" name="local_subdivision" class="form-control" v-model="patientInfo['local_city']" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Country</label>
                        <div class="col-md-10">
                            <input type="text" name="local_subdivision" class="form-control" v-model="patientInfo['local_country']" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Telephone No.</label>
                        <div class="col-md-10">
                            <input type="text" name="local_subdivision" class="form-control" v-model="patientInfo['local_telephone_number']" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Postal Code</label>
                        <div class="col-md-10">
                            <input type="text" name="local_postal_code" class="form-control" v-model="patientInfo['local_postal_code']" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Fax No.</label>
                        <div class="col-md-10">
                            <input type="text" name="local_fax_number" class="form-control" v-model="patientInfo['local_fax_number']">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">Email</label>
                        <div class="col-md-10">
                            <input type="email" name="local_email" class="form-control" v-model="patientInfo['local_email']" required>
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
        submitLocalAddress() {
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