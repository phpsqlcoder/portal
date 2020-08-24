<template>
  <div class="row">
      <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-info"></i>Scedules
                    </div>
                    <!-- <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    </div> -->
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center my-1">
                            <div>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Schedule</button>
                                <button class="btn btn-primary" @click="previousDay">Previous Day</button>
                                <button class="btn btn-primary" @click="nextDay">Next Day</button>
                            </div>
                            &nbsp;
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Date</span>
                                <input type="date" class="form-control" placeholder="Username" aria-describedby="basic-addon1" v-model="date" @change="changedDate">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-bordered my-1">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>8 AM</th>
                                        <th>9 AM</th>
                                        <th>10 AM</th>
                                        <th>11 AM</th>
                                        <th>12 NN</th>
                                        <th>1 PM</th>
                                        <th>2 PM</th>
                                        <th>3 PM</th>
                                        <th>4 PM</th>
                                        <th>5 PM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="doctor in assigned_doctors" :key="doctor.id">
                                        <td>{{doctor.name}}</td>
                                        <template v-for="index in 10">
                                            <td :key="index"
                                            v-if="
                                                doctor.schedules.find(schedule => 
                                                (moment(schedule.time_to, 'h:m a').diff(moment('7:00:00', 'h:m a').add(index, 'hours')) >= 0
                                                && moment('7:00:00', 'h:m a').add(index, 'hours').diff(moment(schedule.time_from, 'h:m a')) >= 0)
                                                )
                                                "
                                                class="bg-danger">
                                                <div class="row m-0">
                                                    <div class="col-md-12 d-flex justify-content-end p-0"><a class="text-primary information" @click="scheduleInformation(doctor)"><i class="fa fa-info-circle"></i></a></div>
                                                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                                                        <ul>
                                                            <template v-for="schedule in doctor.schedules" >
                                                                <template v-if="moment(schedule.time_to, 'h:m a').diff(moment('7:00:00', 'h:m a').add(index, 'hours')) >= 0
                                                                && moment('7:00:00', 'h:m a').add(index, 'hours').diff(moment(schedule.time_from, 'h:m a')) >= 0">
                                                                    <li :key="schedule.id">
                                                                    {{schedule.patients.fname}} {{schedule.patients.mname}} {{schedule.patients.lname}}
                                                                    </li>
                                                                </template>
                                                            </template>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td :key="index" v-else class="bg-success">
                                                <div class="row m-0">
                                                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                                                        Available
                                                    </div>
                                                </div>
                                            </td>
                                        </template>
                                    </tr>
                                    <tr v-for="nurse in assigned_nurses" :key="nurse.id">
                                        <td>{{nurse.name}}</td>
                                        <template v-for="index in 10">
                                            <td :key="index"
                                            v-if="
                                                nurse.schedules.find(schedule => 
                                                (moment(schedule.time_to, 'h:m a').diff(moment('7:00:00', 'h:m a').add(index, 'hours')) >= 0
                                                && moment('7:00:00', 'h:m a').add(index, 'hours').diff(moment(schedule.time_from, 'h:m a')) >= 0)
                                                )
                                                "
                                                class="bg-danger">
                                                <div class="row m-0">
                                                    <div class="col-md-12 d-flex justify-content-end p-0"><a class="text-primary information" @click="scheduleInformation(nurse)"><i class="fa fa-info-circle"></i></a></div>
                                                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                                                        <ul>
                                                            <template v-for="schedule in nurse.schedules" >
                                                                <template v-if="moment(schedule.time_to, 'h:m a').diff(moment('7:00:00', 'h:m a').add(index, 'hours')) >= 0
                                                                && moment('7:00:00', 'h:m a').add(index, 'hours').diff(moment(schedule.time_from, 'h:m a')) >= 0">
                                                                    <li :key="schedule.id">
                                                                    {{schedule.patients.fname}} {{schedule.patients.mname}} {{schedule.patients.lname}}
                                                                    </li>
                                                                </template>
                                                            </template>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td :key="index" v-else class="bg-success">
                                                <div class="row m-0">
                                                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                                                        Available
                                                    </div>
                                                </div>
                                            </td>
                                        </template>
                                    </tr>
                                    <tr v-for="machine in assigned_machines" :key="machine.id">
                                        <td>{{machine.name}}</td>
                                        <template v-for="index in 10">
                                            <td :key="index"
                                            v-if="
                                                machine.schedules.find(schedule => 
                                                (moment(schedule.time_to, 'h:m a').diff(moment('7:00:00', 'h:m a').add(index, 'hours')) >= 0
                                                && moment('7:00:00', 'h:m a').add(index, 'hours').diff(moment(schedule.time_from, 'h:m a')) >= 0)
                                                )
                                                "
                                                class="bg-danger">
                                                <div class="row m-0">
                                                    <div class="col-md-12 d-flex justify-content-end p-0"><a class="text-primary information" @click="scheduleInformation(machine)"><i class="fa fa-info-circle"></i></a></div>
                                                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                                                        <ul>
                                                            <template v-for="schedule in machine.schedules" >
                                                                <template v-if="moment(schedule.time_to, 'h:m a').diff(moment('7:00:00', 'h:m a').add(index, 'hours')) >= 0
                                                                && moment('7:00:00', 'h:m a').add(index, 'hours').diff(moment(schedule.time_from, 'h:m a')) >= 0">
                                                                    <li :key="schedule.id">
                                                                    {{schedule.patients.fname}} {{schedule.patients.mname}} {{schedule.patients.lname}}
                                                                    </li>
                                                                </template>
                                                            </template>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td :key="index" v-else class="bg-success">
                                                <div class="row m-0">
                                                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                                                        Available
                                                    </div>
                                                </div>
                                            </td>
                                        </template>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>        
      </div>
      <template>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Schedule</h4>
                        {{form.time_from}}
                        {{form.time_to}}
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-3">Date</label>
                            <div class="col-md-9">
                                <input type="date" :min="moment().format('Y-MM-D')" class="form-control" v-model="form.date" @change="fetchPersonnels">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">Time (From - To)</label>
                            <div class="col-md-4">
                                <select class="form-control" v-model="form.time_from" :disabled="form.date===null" @change="fetchPersonnels">
                                    <option value="" disabled>From</option>
                                    <option 
                                    v-for="index in 10" 
                                    :key="index" 
                                    :value="moment('7:00:00', 'h:m a').add(index, 'hours').format('LT')">
                                        {{moment('7:00:00', 'h:m a').add(index, 'hours').format('LT')}}
                                    </option>
                                     </select>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <select class="form-control" v-model="form.time_to" :disabled="form.date===null || form.time_from===''" @change="fetchPersonnels">
                                    <option value="" disabled>To</option>
                                    <option 
                                    v-for="index in 10" 
                                    :key="index" 
                                    :value="moment('7:00:00', 'h:m a').add(index, 'hours').format('LT')"
                                    :hidden="moment('7:00:00', 'h:m a').add(index, 'hours').diff(moment(form.time_from, 'h:m a')) <! 0"
                                    >
                                        {{moment('7:00:00', 'h:m').add(index, 'hours').format('LT')}}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">Patient</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for patient" list="patients" v-model="form.patient">
                                    <datalist id="patients">
                                        <option v-for="patient in patients" :key="patient.id" :value="patient.lname"></option>
                                    </datalist>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" @click="searchPatient">Search</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">Procedure</label>
                            <div class="col-md-9">
                                <textarea rows="5" class="form-control" v-model="form.procedure"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">Assign Doctor/s</label>
                            <div class="col-md-9">
                                <vs-select
                                placeholder="Select Doctor/s here..."
                                multiple
                                v-model="form.doctors"
                                >
                                    <vs-select-item :key="doctor.id" :value="doctor" :text="doctor.name" v-for="doctor in doctors" />
                                </vs-select>
                                <label class="my-1">Assigned Doctor/s:</label>
                                <div>
                                    <ul>
                                        <li v-for="(doctor, index) in form.doctors" :key="index">{{index+1}}. {{doctor.name}} <a class="text-danger mx-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">Assign Nurse/s</label>
                            <div class="col-md-9">
                                <vs-select
                                placeholder="Select Nurse/s here"
                                multiple
                                v-model="form.nurses"
                                >
                                    <vs-select-item :key="nurses.id" :value="nurses" :text="nurses.name" v-for="nurses in nurses" />
                                </vs-select>
                                <label class="my-1">Assigned Nurse/s:</label>
                                <div>
                                    <ul>
                                        <li v-for="(nurse, index) in form.nurses" :key="index">{{index+1}}. {{nurse.name}} <a class="text-danger mx-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">Machine/s to be used</label>
                            <div class="col-md-9">
                                <vs-select
                                placeholder="Select Machine/s here"
                                multiple
                                v-model="form.machines"
                                >
                                    <vs-select-item :key="machine.id" :value="machine" :text="machine.name" v-for="machine in machines" />
                                </vs-select>
                                <label class="my-1">Assigned Machine/s:</label>
                                <div>
                                    <ul>
                                        <li v-for="(madchine, index) in form.machines" :key="index">{{index+1}}. {{madchine.name}} <a class="text-danger mx-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" @click="saveTesting">Save changes</button>
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
    components: {},
    data() {
        return {
            moment: moment,
            assigned_nurses: [],
            assigned_doctors: [],
            assigned_machines: [],
            search_patient: null,
            doctors: [],
            nurses: [],
            patients: [],
            machines: [],
            form: {
                date: null,
                time_from: '',
                time_to: '',
                patient: null,
                procedure: null,
                doctors: [],
                nurses: [],
                machines: [],
            },
            time: null,
            date: moment().format('Y-MM-D'),
        }
    },
    mounted() {
        this.fetchPersonnel()
        this.fetchPersonnelsThatHasSchedule()
        this.fetchMachinesThatHasSchedule()
    },
    methods: {
        fetchPersonnelsThatHasSchedule() {
            this.$http.get('api/personnels/fetch-personnels-that-has-schedule')
            .then(response => {
                var personnels = response.data.personnels
                this.assigned_doctors = personnels.filter(personnel => (personnel.personnel_type.toLowerCase() === 'doctor'))
                this.assigned_nurses = personnels.filter(personnel => (personnel.personnel_type.toLowerCase() === 'nurse'))
            })
            .catch(error => console.log(error))
        },
        fetchMachinesThatHasSchedule() {
            this.$http.get('api/machines/fetch-machines-that-has-schedule')
            .then(response => this.assigned_machines = response.data.machines)
            .catch(error => console.log(error))
        },
        fetchPersonnel() {
            this.$http.all([
                this.$http.get('api/personnels/fetch-all-doctors'), 
                this.$http.get('api/personnels/fetch-all-nurses'),
                this.$http.get('api/machines')
            ])
            .then(this.$http.spread((request_one, request_two, request_three) => {
                this.doctors = request_one.data.doctors
                this.nurses = request_two.data.nurses
                this.machines = request_three.data.machines
            }))
            .catch(error => console.log(error))
        },
        fetchPersonnels() {
            // if(this.form.date != null && this.form.time_from != '' && this.form.time_to === '') {
            //     this.form.time_to = moment(this.form.time_from, 'h:m a').add(1, 'hours').format('LT')
            // }
            if(this.form.date != null && this.form.time_from != '' && this.form.time_to != ''){
                this.$http.all([
                    this.$http.post('api/personnels/fetch-available-personnels', {
                        date: this.form.date,
                        time_from: this.form.time_from,
                        time_to: this.form.time_to
                    }),
                    this.$http.post('api/machines/fetch-available-machines', {
                        date: this.form.date,
                        time_from: this.form.time_from,
                        time_to: this.form.time_to
                    }),
                ])
                .then(this.$http.spread((doctors, nurses, machines) => {
                    console.log(doctors)
                    console.log(nurses)
                    console.log(machines)
                }))
                .catch(error => console.log(error))
            }
        },
        searchPatient() {
            this.$http.post('api/search-patient', {name: this.form.patient})
            .then(response => this.patients = response.data.patients)
            .catch(error => console.log(error))
        },
        saveTesting() {
            this.$http.post('api/schedules/create-new-schedule', this.form)
            .then(response => {
                this.$vs.notify({
                    title:'Save Schedule',
                    text:'Save schedule successfully',
                    color:'success'
                })
                this.date = this.form.date
                this.form = {...this.form,
                    date: null,
                    time_from: '',
                    time_to: '',
                    patient: null,
                    procedure: null,
                    doctors: [],
                    nurses: [],
                    machines: [],
                }
                this.fetchPersonnelsThatHasSchedule()
                this.fetchMachinesThatHasSchedule()
            })
            .catch(error => console.log(error))
        },
        scheduleInformation(doctor) {
            doctor.schedules.forEach(schedule => {
                console.log(schedule.patients.fname)
                console.log(schedule.patients.mname)
                console.log(schedule.patients.lname)
            })
        },
        previousDay() {
            this.date = moment(this.date, 'Y-MM-DD').subtract(1, 'days').format('Y-MM-DD')
            this.$http.all([
                this.$http.post('api/personnels/fetch-personnels-that-has-schedule-by-date', {date: this.date}),
                this.$http.post('api/machines/fetch-machines-that-has-schedule-by-date', {date: this.date})
            ])
            .then(this.$http.spread((response, machines) => {
                var personnels = response.data.personnels
                this.assigned_doctors = personnels.filter(personnel => (personnel.personnel_type === 'Doctor'))
                this.assigned_nurses = personnels.filter(personnel => (personnel.personnel_type === 'Nurse'))
                this.assigned_machines = machines.data.machines
            }))
            .catch(error => console.log(error))
        },
        nextDay() {
            this.date = moment(this.date, 'Y-MM-DD').add(1, 'days').format('Y-MM-DD')
            this.$http.all([
                this.$http.post('api/personnels/fetch-personnels-that-has-schedule-by-date', {date: this.date}),
                this.$http.post('api/machines/fetch-machines-that-has-schedule-by-date', {date: this.date})
            ])
            .then(this.$http.spread((response, machines) => {
                var personnels = response.data.personnels
                this.assigned_doctors = personnels.filter(personnel => (personnel.personnel_type === 'Doctor'))
                this.assigned_nurses = personnels.filter(personnel => (personnel.personnel_type === 'Nurse'))
                this.assigned_machines = machines.data.machines
            }))
            .catch(error => console.log(error))
        },
        changedDate() {
            this.$http.all([
                this.$http.post('api/personnels/fetch-personnels-that-has-schedule-by-date', {date: this.date}),
                this.$http.post('api/machines/fetch-machines-that-has-schedule-by-date', {date: this.date})
            ])
            .then(this.$http.spread((response, machines) => {
                var personnels = response.data.personnels
                this.assigned_doctors = personnels.filter(personnel => (personnel.personnel_type === 'Doctor'))
                this.assigned_nurses = personnels.filter(personnel => (personnel.personnel_type === 'Nurse'))
                this.assigned_machines = machines.data.machines
            }))
            .catch(error => console.log(error))
        }
    }
}
</script>

<style lang="scss" scoped>
    .modal {
        ul {
            margin: 5px 20px;
            li {
                list-style-type: none;
                margin: 10px 0px;
            }
        }
    }

    table tbody {
        ul {
            li {
                display: list-item;
            }
        }
    }

    table thead tr th {
        text-align: center;
    }

    // table tbody tr td {
    //     text-align: center;
    //     align-items: center;
    // }
</style>