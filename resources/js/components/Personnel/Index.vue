<template>
  <div class="row m-0">
      <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-info"></i>Personnels
                    </div>
                    
                    <div class="tools">
                        <a href="#" class="text-white" data-toggle="modal" data-target="#addPersonnel">Add Personnel</a>
                        <!-- <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a> -->
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row m-0">
                        <div class="col-md-12">
                            <div class="form-group row m-0">
                                <label class="col-sm-12 col-md-2 whitespace-no-wrap">Search Personnels</label>
                                <div class="col-sm-12 col-md-3"><input type="text" class="form-control" placeholder="Search name here..." v-model="filter_by_name"></div>
                            </div>
                            <br>
                            <div class="form-group row m-0">
                                <label class="col-sm-12 col-md-2 whitespace-no-wrap">Filter Personnels</label>
                                <div class="col-sm-12 col-md-3">
                                    <select class="form-control" v-model="filter_by_type">
                                        <option value="All">All</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                        <option value="Doctor">Doctors</option>
                                        <option value="Nurse">Nurses</option>
                                        <option value="Maintenance">Maintenance</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div v-for="personnel in filteredPersonnels" :key="personnel.id" class="col-sm-6 col-md-3 mt-1">
                            <div class="thumbnail">
                                <img :src="personnel.image" alt="#">
                                <div class="caption">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 :class="(personnel.is_active === 'Active') ? 'bg-success' : 'bg-danger'">
                                            <span v-if="personnel.personnel_type.toLowerCase() === 'doctor'">Dr.</span> 
                                            <span v-if="personnel.personnel_type.toLowerCase() === 'nurse'">Nurse</span> 
                                            {{personnel.name}}
                                        </h3>
                                        <a class="text-primary information mr-1" @click="showPersonnelDetails(personnel)"><i class="fa fa-info-circle"></i></a>
                                    </div>
                                    <p>Temporary Biometric ID: {{personnel.id}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
      </div>

      <template>
            <div class="modal fade" id="addPersonnel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <form @submit.prevent="submitPersonnel" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img :src="temporary_image" alt="Temp" style="width: 200px; height: 200px;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Profile</label>
                                    <div class="col-md-9">
                                        <input type="file" id="img" name="img" class="form-control" accept="image/*" required @change="changedImage">
                                    </div>
                                </div>
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
                                <div class="form-group row">
                                    <label class="col-md-3">Status</label>
                                    <div class="col-md-9">
                                        <select class="form-control" v-model="form.is_active" required>
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
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

      <template>
            <div class="modal fade" id="EditPersonnel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <form @submit.prevent="submitEditedPersonnel" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img :src="temporary_image" alt="Temp" style="width: 200px; height: 200px;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Profile</label>
                                    <div class="col-md-9">
                                        <input type="file" id="img" name="img" class="form-control" accept="image/*" @change="changedImage">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Name..." class="form-control" v-model="edit_personnel.name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Personnel Type</label>
                                    <div class="col-md-9">
                                        <select class="form-control" v-model="edit_personnel.personnel_type" required>
                                            <option value="" disabled selected>Select Type</option>
                                            <option value="Doctor">Doctor</option>
                                            <option value="Nurse">Nurse</option>
                                            <option value="Maintenance">Maintenance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Status</label>
                                    <div class="col-md-9">
                                        <select class="form-control" v-model="edit_personnel.is_active" required>
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
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

      <template>
            <div class="modal fade" id="Personnel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">{{personnel.name}}'s Details</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <label>{{personnel.name}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Personnel Type</label>
                                <div class="col-md-9">
                                    <label>{{personnel.personnel_type}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Status</label>
                                <div class="col-md-9">
                                    <label>{{personnel.is_active}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" @click="editPersonnel(personnel)">Edit</button>
                            <button v-if="personnel.is_active === 'Active'" type="submit" class="btn btn-danger" @click="toggleStatus(personnel)">Inactive</button>
                            <button v-else type="submit" class="btn btn-success" @click="toggleStatus(personnel)">Active</button>
                        </div>
                    </div>
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
            personnel: {},
            form: {
                image: '',
                name: null,
                personnel_type: '',
                is_active: '',
            },
            edit_personnel: {
                image: '',
                name: null,
                personnel_type: '',
                is_active: '',
            },
            editing: false,
            filter_by_type: 'All',
            filter_by_name: '',
            temporary_image: 'images/profile.png',
            uploaded_image: undefined
        }
    },
    mounted() {
        this.fetchPersonnels()
    },
    methods: {
        fetchPersonnels() {
            this.$http.get('api/personnels/')
            .then(response => this.personnels = response.data.personnels)
            .then(response => console.log(this.personnels))
            .catch(error => console.log(error))
        },
        submitPersonnel() {
            var formData = new FormData()
            formData.append('image', this.uploaded_image)
            formData.append('name', this.form.name)
            formData.append('personnel_type', this.form.personnel_type)
            formData.append('is_active', this.form.is_active)

            this.$http.post('api/personnels/', formData)
            .then(response => {
                this.fetchPersonnels()
                this.form = {...this.form, name: null, personnel_type: ''}
            })
            .catch(error => console.log(error))
        },
        showPersonnelDetails(personnel) {
            $("#Personnel").modal('show')
            this.personnel = personnel
        },
        toggleStatus(personnel) {
            this.$http.put(`api/personnels/update-status/${personnel.id}`)
            .then(response => {
                personnel.is_active = response.data.personnel['is_active']
                this.$vs.notify({
                    title:'Personnel Updated',
                    text: `${response.data.message}`,
                    color:'success'
                })
            })
            .catch(error => console.log(error))
        },
        editPersonnel(personnel) {
            this.edit_personnel = {...this.edit_personnel, name: personnel.name, personnel_type: personnel.personnel_type, is_active: personnel.is_active}
            this.temporary_image = personnel.image
            this.editing = true
            $("#EditPersonnel").modal('show')
        },
        submitEditedPersonnel() {
            var formData = new FormData()
            formData.append('image', this.uploaded_image)
            formData.append('name', this.edit_personnel.name)
            formData.append('personnel_type', this.edit_personnel.personnel_type)
            formData.append('is_active', this.edit_personnel.is_active)

            this.$http.post(`api/personnels/update-data/${this.personnel.id}`, formData)
            .then(response => {
                this.fetchPersonnels()
                this.$vs.notify({
                    title:'Personnel Updated',
                    text: `${response.data.message}`,
                    color:'success'
                })
                this.editing = false
            })
            .catch(error => console.log(error))
        },
        changedImage(e) {
            var image = e.target.files[0]
            var new_image = URL.createObjectURL(image)
            this.temporary_image = new_image
            this.uploaded_image = image
        }
    },
    computed: {
        filteredPersonnels() {
            if(this.filter_by_type === 'Active' || this.filter_by_type === 'Inactive') {
                return this.personnels.filter(personnel => (personnel.is_active === this.filter_by_type && personnel.name.toUpperCase().indexOf(this.filter_by_name.toUpperCase()) > -1))
            } else if (this.filter_by_type === 'All') {
                return this.personnels.filter(personnel => (personnel.name.toUpperCase().indexOf(this.filter_by_name.toUpperCase()) > -1))
            } else {
                return this.personnels.filter(personnel => (personnel.personnel_type === this.filter_by_type) && personnel.name.toUpperCase().indexOf(this.filter_by_name.toUpperCase()) > -1)
            }
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

    .whitespace-no-wrap {
        white-space: nowrap;
    }
</style>