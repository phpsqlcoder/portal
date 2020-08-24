<template>
  <div class="row">
      <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-info"></i>Personnels
                    </div>
                    
                    <div class="tools">
                        <a href="#" class="text-white" data-toggle="modal" data-target="#myModal">Add Personnel</a>
                        <!-- <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a> -->
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div v-for="personnel in personnels" :key="personnel.id" class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="images/profile.png" alt="#">
                                <div class="caption">
                                    <h3>
                                        <span v-if="personnel.personnel_type.toLowerCase() === 'doctor'">Dr.</span> 
                                        <span v-if="personnel.personnel_type.toLowerCase() === 'nurse'">Nurse</span> 
                                        {{personnel.name}}
                                    </h3>
                                    <p>Temporary Biometric ID: {{personnel.id}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
      </div>

      <template>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <form @submit.prevent="submitPersonnel">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Name..." class="form-control" v-model="form.name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Personnel Type</label>
                                    <div class="col-md-9">
                                        <select class="form-control" v-model="form.personnel_type" required>
                                            <option value="" disabled selected>Select Type</option>
                                            <option value="Doctor">Doctor</option>
                                            <option value="Nurse">Nurse</option>
                                            <option value="Maintenance">Maintenance</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      </template>

  </div>
</template>

<script>
var moment = require('moment');
export default {
    data() {
        return {
            moment: moment,
            personnels: [],
            form: {
                name: null,
                personnel_type: ''
            }
        }
    },
    mounted() {
        this.fetchPersonnels()
    },
    methods: {
        fetchPersonnels() {
            this.$http.get('api/personnels/')
            .then(response => this.personnels = response.data.personnels)
            .catch(error => console.log(error))
        },
        submitPersonnel() {
            this.$http.post('api/personnels/', this.form)
            .then(response => {
                this.fetchPersonnels()
                this.form = {...this.form, name: null, personnel_type: ''}
            })
            .catch(error => console.log(error))
        }
    }
}
</script>

<style lang="scss" scoped>
    img {
        height: 300px;
    }

    .text-white {
        color: white;
    }
</style>