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
                        <div class="col-md-12 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <label class="m-0"><strong>Legends:</strong></label>
                                &nbsp;
                                <div class="d-flex align-items-center" v-for="(status, index) in statuses" :key="index">
                                    <div class="color" :class="status.toLowerCase()"></div>
                                    &nbsp;
                                    <label class="m-0">{{status}}</label>
                                    <template v-if="index === statuses.length-1"></template>
                                    <template v-else>|</template>
                                    &nbsp;
                                </div>
                            </div>
                            <div class=" d-flex justify-content-center my-1">
                                <div>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#addSchedule" @click="addSchedule">Add Schedule</button>
                                    <button class="btn btn-primary" @click="previousDay">Previous Day</button>
                                    <button class="btn btn-primary" @click="nextDay">Next Day</button>
                                </div>
                                &nbsp;
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Date</span>
                                    <input type="date" class="form-control" placeholder="Username" aria-describedby="basic-addon1" v-model="date" @change="changedDate">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" v-if="assigned_doctors.length > 0">
                            <table class="table table-bordered my-1">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>9:15 AM</th>
                                        <th>10:15 AM</th>
                                        <th>11:15 AM</th>
                                        <th>12:15 NN</th>
                                        <th>1:15 PM</th>
                                        <th>2:15 PM</th>
                                        <th>3:15 PM</th>
                                        <th>4:15 PM</th>
                                        <th>5:15 PM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="doctor in assigned_doctors" :key="doctor.id">
                                        <td>Dr. {{doctor.name}}</td>
                                        <template v-for="index in 9">
                                            <td :key="index"
                                            v-if="
                                                doctor.schedules.find(schedule => 
                                                (moment(schedule.time_to, 'h:m a').diff(moment('8:15:00', 'h:m a').add(index, 'hours')) >= 0
                                                && moment('8:15:00', 'h:m a').add(index, 'hours').diff(moment(schedule.time_from, 'h:m a')) >= 0)
                                                )
                                                "
                                                class="bg-success">
                                                <!-- <div class="row m-0"> -->
                                                    <!-- <div class="col-md-12 d-flex justify-content-end p-0"><a class="text-primary information" @click="scheduleInformation(doctor, index)"><i class="fa fa-info-circle"></i></a></div> -->
                                                    <!-- <div class="col-md-12 d-flex justify-content-center align-items-center"> -->
                                                        <ul>
                                                            <template v-for="schedule in doctor.schedules" >
                                                                <template v-if="moment(schedule.time_to, 'h:m a').diff(moment('8:15:00', 'h:m a').add(index, 'hours')) >= 0
                                                                && moment('8:15:00', 'h:m a').add(index, 'hours').diff(moment(schedule.time_from, 'h:m a')) >= 0">
                                                                    <li :key="schedule.id" 
                                                                    :class="[
                                                                    schedule.status === 'Scheduled' ? 'scheduled' : '',
                                                                    schedule.status === 'Arrived' ? 'arrived' : '',
                                                                    schedule.status === 'Waiting' ? 'waiting' : '',
                                                                    schedule.status === 'On-going' ? 'on-going' : '',
                                                                    schedule.status === 'Done' ? 'done' : ''
                                                                    ]"
                                                                    class="d-flex margin-top-bottom">
                                                                        <a class="text-primary information mr-1" @click="scheduleInformation(schedule, index)"><i class="fa fa-info-circle"></i></a>
                                                                        <label>{{schedule.patients.fullname}}</label>
                                                                    </li>
                                                                </template>
                                                            </template>
                                                        </ul>
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                            </td>
                                            <td :key="index" v-else class="vacant">
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
                                        <template v-for="index in 9">
                                            <td :key="index"
                                            v-if="
                                                nurse.schedules.find(schedule => 
                                                (moment(schedule.time_to, 'h:m a').diff(moment('8:15:00', 'h:m a').add(index, 'hours')) >= 0
                                                && moment('8:15:00', 'h:m a').add(index, 'hours').diff(moment(schedule.time_from, 'h:m a')) >= 0)
                                                )
                                                "
                                                class="bg-success">
                                                <!-- <div class="row m-0"> -->
                                                    <!-- <div class="col-md-12 d-flex justify-content-end p-0"><a class="text-primary information" @click="scheduleInformation(nurse, index)"><i class="fa fa-info-circle"></i></a></div> -->
                                                    <!-- <div class="col-md-12 d-flex justify-content-center align-items-center"> -->
                                                        <ul>
                                                            <template v-for="schedule in nurse.schedules" >
                                                                <template v-if="moment(schedule.time_to, 'h:m a').diff(moment('8:15:00', 'h:m a').add(index, 'hours')) >= 0
                                                                && moment('8:15:00', 'h:m a').add(index, 'hours').diff(moment(schedule.time_from, 'h:m a')) >= 0">
                                                                    <li :key="schedule.id"
                                                                    :class="[
                                                                    schedule.status === 'Scheduled' ? 'scheduled' : '',
                                                                    schedule.status === 'Arrived' ? 'arrived' : '',
                                                                    schedule.status === 'Waiting' ? 'waiting' : '',
                                                                    schedule.status === 'On-going' ? 'on-going' : '',
                                                                    schedule.status === 'Done' ? 'done' : ''
                                                                    ]"
                                                                    class="d-flex margin-top-bottom">
                                                                    <a class="text-primary information mr-1" @click="scheduleInformation(schedule, index)"><i class="fa fa-info-circle"></i></a>
                                                                    {{schedule.patients.fullname}}
                                                                    </li>
                                                                </template>
                                                            </template>
                                                        </ul>
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                            </td>
                                            <td :key="index" v-else class="vacant">
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
                        <div class="col-md-12 text-center" v-else>
                            <h1>No Schedule on this Day!</h1>
                        </div>
                    </div>
                </div>
            </div>        
      </div>
      <template>
            <div class="modal fade" id="addSchedule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add Schedule</h4>
                        </div>
                        <form @submit.prevent="submitSchedule">
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-md-3">Date</label>
                                    <div class="col-md-9">
                                        <input type="date" :min="moment().format('Y-MM-DD')" class="form-control" v-model="form.date" @change="fetchAvailablePersonnelsAndMachines" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Time (From - To)</label>
                                    <div class="col-md-4">
                                        <select class="form-control" v-model="form.time_from" :disabled="form.date===null" @change="fetchAvailablePersonnelsAndMachines" required>
                                            <option value="" disabled>From</option>
                                            <option 
                                            v-for="index in 9" 
                                            :key="index" 
                                            :value="moment('8:15:00', 'h:m a').add(index, 'hours').format('LT')">
                                                {{moment('8:15:00', 'h:m a').add(index, 'hours').format('LT')}}
                                            </option>
                                            </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-4">
                                        <select class="form-control" v-model="form.time_to" :disabled="form.date===null || form.time_from===''" @change="fetchAvailablePersonnelsAndMachines" required>
                                            <option value="" disabled>To</option>
                                            <option 
                                            v-for="index in 9" 
                                            :key="index" 
                                            :value="moment('8:15:00', 'h:m a').add(index, 'hours').format('LT')"
                                            :hidden="moment('8:15:00', 'h:m a').add(index, 'hours').diff(moment(form.time_from, 'h:m a')) <! 0"
                                            >
                                                {{moment('8:15:00', 'h:m').add(index, 'hours').format('LT')}}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-md-3">Status</label>
                                        <div class="col-md-9">
                                            <vs-select
                                            placeholder="Select Status"
                                            v-model="form.status"
                                            >
                                                <vs-select-item v-for="(status, index) in statuses" :key="index" :text="status" :value="status"/>
                                            </vs-select>
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Patient</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search for patient" list="patients" v-model="patient" required>
                                            <datalist id="patients">
                                                <option v-for="patient in patients" :key="patient.id" :value="patient.fullname"></option>
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
                                        <textarea rows="5" class="form-control" v-model="form.procedure" placeholder="Type the procedure here..." required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Assign Doctor/s</label>
                                    <div class="col-md-9">
                                        <vs-select
                                        placeholder="Select Doctor/s here..."
                                        multiple
                                        v-model="form.doctors"
                                        required
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
                                        required
                                        >
                                            <vs-select-item :key="nurses.id" :value="nurses" :text="nurses.name" v-for="nurses in nurses" />
                                        </vs-select>
                                        <label class="my-1">Assigned Nurse/s:</label>
                                        <div>
                                            <ul>
                                                <li v-for="(nurse, index) in form.nurses" :key="index">{{index+1}}. {{nurse.name}}</li>
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
                                        required
                                        >
                                            <vs-select-item :key="machine.id" :value="machine" :text="machine.name" v-for="machine in machines" />
                                        </vs-select>
                                        <label class="my-1">Assigned Machine/s:</label>
                                        <div>
                                            <ul>
                                                <li v-for="(madchine, index) in form.machines" :key="index">{{index+1}}. {{madchine.name}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
      </template>

        <!-- Show Information: Start -->
            <template>
                <div id="showInformation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document" v-if="show_info">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">{{show_information.name}} Schedule/s</h4>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row m-0">
                                                <div class="col-md-12 d-flex justify-content-center mb-1"><h5><strong>{{moment(show_information.date, 'YYYY-MM-D').format('MMMM Do, YYYY')}} from {{moment(show_information.time_from, 'h:m a').format('LT')}} To {{moment(show_information.time_to, 'h:m a').format('LT')}}</strong></h5></div>
                                                <div class="col-md-4 text-right" style="margin-top: 5px;">Name of the Patient:</div>
                                                <div class="col-md-8"><ul><strong>{{show_information.patients.fullname}}</strong></ul></div>
                                                <div class="col-md-4 text-right"><li>Assigned Doctor/s: </li></div>
                                                <div class="col-md-8">
                                                    <ul>
                                                        <li v-for="personnel in show_information.assigned_doctors" :key="personnel.id"><strong>Dr. {{personnel.name}}</strong></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 text-right"><li>Assigned Nurse/s: </li></div>
                                                <div class="col-md-8">
                                                    <ul>
                                                        <li v-for="personnel in show_information.assigned_nurses" :key="personnel.id"><strong>{{personnel.name}}</strong></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 text-right"><li>Machine to be used: </li></div>
                                                <div class="col-md-8">
                                                    <ul>
                                                        <li v-for="machine in show_information.machines" :key="machine.id"><strong>{{machine.name}}</strong></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 text-right">Procedure:</div>
                                                <div class="col-md-8"><ul><strong>{{show_information.procedure}}</strong></ul></div>
                                                <div class="col-md-4 text-right">Status:</div>
                                                <div class="col-md-8"><ul class="d-flex justify-content-between"><strong>{{show_information.status}}</strong></ul></div>
                                                <div class="col-md-12 mt-1 d-flex justify-content-end">
                                                    <button class="btn btn-primary" @click="editSchedule" data-toggle="modal" data-target="#editSchedule">Edit Schedule</button> &nbsp;
                                                    <button class="btn btn-danger" @click="cancelSchedule">Cancel Schedule</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </template>
        <!-- Show Information: End -->

        <template>
            <div class="modal fade" id="editSchedule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="cancelEditing"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Schedule</h4>
                        </div>
                        <form @submit.prevent="submitEditedSchedule">
                            <div class="modal-body">
                                <div class="row" v-if="loading">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <pulse-loader :loading="loading" color="blue" size="30px"></pulse-loader>
                                    </div>
                                </div>
                                <template v-else>
                                    <div class="form-group row">
                                        <label class="col-md-3">Date</label>
                                        <div class="col-md-9">
                                            <input type="date" :min="moment().format('Y-MM-DD')" class="form-control" v-model="form_edit.date" @change="fetchAvailablePersonnelsAndMachines" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Time (From - To)</label>
                                        <div class="col-md-4">
                                            <select class="form-control" v-model="form_edit.time_from" :disabled="form_edit.date===null" @change="fetchAvailablePersonnelsAndMachines" required>
                                                <option value="" disabled>From</option>
                                                <option 
                                                v-for="index in 9" 
                                                :key="index" 
                                                :value="moment('8:15:00', 'h:m a').add(index, 'hours').format('LT')">
                                                    {{moment('8:15:00', 'h:m a').add(index, 'hours').format('LT')}}
                                                </option>
                                                </select>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">
                                            <select class="form-control" v-model="form_edit.time_to" :disabled="form_edit.date===null || form_edit.time_from===''" @change="fetchAvailablePersonnelsAndMachines" required>
                                                <option value="" disabled>To</option>
                                                <option 
                                                v-for="index in 9" 
                                                :key="index" 
                                                :value="moment('8:15:00', 'h:m a').add(index, 'hours').format('LT')"
                                                :hidden="moment('8:15:00', 'h:m a').add(index, 'hours').diff(moment(form_edit.time_from, 'h:m a')) <! 0"
                                                >
                                                    {{moment('8:15:00', 'h:m').add(index, 'hours').format('LT')}}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Status</label>
                                        <div class="col-md-9">
                                            <vs-select
                                            placeholder="Select Status"
                                            v-model="form_edit.status"
                                            >
                                                <vs-select-item v-for="(status, index) in statuses" :key="index" :text="status" :value="status"/>
                                            </vs-select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Patient</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for patient" list="patients" v-model="patient" required>
                                                <datalist id="patients">
                                                    <option v-for="patient in patients" :key="patient.id" :value="patient.fullname"></option>
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
                                            <textarea rows="5" class="form-control" v-model="form_edit.procedure" placeholder="Type the procedure here..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Assign Doctor/s</label>
                                        <div class="col-md-9">
                                            <vs-select
                                            placeholder="Select Doctor/s here..."
                                            multiple
                                            v-model="form_edit.doctors"
                                            required
                                            >
                                                <vs-select-item :key="doctor.id" :value="doctor" :text="doctor.name" v-for="doctor in doctors" />
                                            </vs-select>
                                            <label class="my-1">Assigned Doctor/s:</label>
                                            <div>
                                                <ul>
                                                    <li v-for="(doctor, index) in form_edit.doctors" :key="doctor.id">{{index+1}}. {{doctor.name}} <a class="text-danger mx-1" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></a></li>
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
                                            v-model="form_edit.nurses"
                                            required
                                            >
                                                <vs-select-item :key="nurses.id" :value="nurses" :text="nurses.name" v-for="nurses in nurses" />
                                            </vs-select>
                                            <label class="my-1">Assigned Nurse/s:</label>
                                            <div>
                                                <ul>
                                                    <li v-for="(nurse, index) in form_edit.nurses" :key="index">{{index+1}}. {{nurse.name}}</li>
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
                                            v-model="form_edit.machines"
                                            required
                                            >
                                                <vs-select-item :key="machine.id" :value="machine" :text="machine.name" v-for="machine in machines" />
                                            </vs-select>
                                            <label class="my-1">Assigned Machine/s:</label>
                                            <div>
                                                <ul>
                                                    <li v-for="(madchine, index) in form_edit.machines" :key="index">{{index+1}}. {{madchine.name}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                            <div class="modal-footer" v-if="!loading">
                                <button type="button" class="btn btn-default" data-dismiss="modal" @click="cancelEditing">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
      </template>

      <template></template>
  </div>
</template>

<script>
var moment = require('moment');
import PulseLoader from 'vue-spinner/src/PulseLoader.vue'
export default {
    components: {PulseLoader},
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
            patient: null,
            form: {
                date: null,
                time_from: '',
                time_to: '',
                patient: null,
                procedure: null,
                doctors: [],
                nurses: [],
                machines: [],
                status: null,
            },
            form_edit: {
                date: null,
                time_from: '',
                time_to: '',
                patient: null,
                procedure: null,
                doctors: [],
                nurses: [],
                machines: [],
                status: null,
            },
            time: null,
            date: moment().format('Y-MM-DD'),
            show_information: [],
            show_info: false,
            edit_schedule: false,
            loading: false,
            statuses: ['Scheduled', 'Arrived', 'Waiting', 'On-going', 'Done'],
            testing_patient: undefined
        }
    },
    mounted() {
        // this.fetchPersonnel()
        this.fetchPersonnelsThatHasSchedule()
        this.fetchMachinesThatHasSchedule()
        this.searchPatient()
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
        // fetchPersonnel() {
        //     this.$http.all([
        //         this.$http.get('api/personnels/fetch-all-doctors'), 
        //         this.$http.get('api/personnels/fetch-all-nurses'),
        //         this.$http.get('api/machines')
        //     ])
        //     .then(this.$http.spread((request_one, request_two, request_three) => {
        //         this.doctors = request_one.data.doctors
        //         this.nurses = request_two.data.nurses
        //         this.machines = request_three.data.machines
        //     }))
        //     .catch(error => console.log(error))
        // },
        fetchAvailablePersonnelsAndMachines() {
            if(!this.edit_schedule) {
                var form = {
                    date: this.form.date,
                    time_from: this.form.time_from,
                    time_to: this.form.time_to
                }
            } else {
                var form = {
                    date: this.form_edit.date,
                    time_from: this.form_edit.time_from,
                    time_to: this.form_edit.time_to,
                    edit: true
                }
            }

            if(moment(form.time_from, 'h:m a').diff(moment(form.time_to, 'h:m a')) >= 0) {
                if(!this.edit_schedule) {
                    this.form.time_to = moment(form.time_from, 'h:m a').add(1, 'hours').format('LT')
                } else {
                    this.form_edit.time_to = moment(form.time_from, 'h:m a').add(1, 'hours').format('LT')
                }
            }
            if(form.date != null && form.time_from != '' && form.time_to != ''){
                this.$http.all([
                    this.$http.post('api/personnels/fetch-available-personnels', form),
                    this.$http.post('api/machines/fetch-available-machines', form),
                ])
                .then(this.$http.spread((personnels, machines) => {
                    var personnels = personnels.data.personnels
                    this.doctors = personnels.filter(personnel => (personnel.personnel_type.toLowerCase() === 'doctor'))
                    this.nurses = personnels.filter(personnel => (personnel.personnel_type.toLowerCase() === 'nurse'))
                    this.machines = machines.data.machines

                    this.form = {...this.form, 
                            doctors: [],
                            nurses: [],
                            machines: []
                        }

                    if(this.edit_schedule) {
                        this.form_edit = {...this.form_edit, 
                            doctors: [],
                            nurses: [],
                            machines: []
                        }
                    }
                }))
                .catch(error => console.log(error))
            }
        },
        addSchedule() {
            this.$http.post('api/schedules/disable-editing')
            .then(response => console.log(response.data))
            .catch(error => console.log(error))
        },
        searchPatient() {
            this.$http.post('api/search-patient', {name: this.form.patient})
            .then(response => this.patients = response.data.patients)
            .catch(error => console.log(error))
        },
        submitSchedule() {
            if(this.form.date === null
            || this.form.time_from === ''
            || this.form.time_to === ''
            || this.patient === null
            || this.form.procedure === null
            || this.form.doctors.length === 0
            || this.form.nurses.length === 0
            || this.form.machines.length === 0
            || this.form.status === null) {
                this.$vs.notify({
                    title:'Save Schedule',
                    text:'Please fill up all the form before saving the schedule',
                    color:'danger'
                })
            } else {
                this.form.patient = this.patients.find(patient => (patient.fullname === this.patient))
                if(this.form.patient === undefined) {
                    this.$vs.notify({
                        title:'Save Schedule',
                        text:'The patient you selected is not in the list',
                        color:'danger'
                    })
                } else {
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
                        this.patient = null
                        $('#addSchedule').modal('hide')
                        this.changedDate()
                    })
                    .catch(error => console.log(error))
                }                
            }
        },
        scheduleInformation(data, time) {
            this.show_info = true
            this.show_information = JSON.parse(JSON.stringify(data))

            this.show_information['assigned_doctors'] = this.show_information.personnels.filter(personnel => (personnel.personnel_type.toLowerCase() === 'doctor'))
            this.show_information['assigned_nurses'] = this.show_information.personnels.filter(personnel => (personnel.personnel_type.toLowerCase() === 'nurse'))

            $('#showInformation').modal('show')
        },
        editSchedule() {
            this.loading = true
            this.edit_schedule = true

            var data = JSON.parse(JSON.stringify(this.show_information))
            
            this.editingSchedule()
            .catch(error => console.log(error))
            
            this.form_edit = {...this.form_edit, 
            date: data.date,
            time_from: moment(data.time_from, 'h:m a').format('LT'),
            time_to: moment(data.time_to, 'h:m a').format('LT'),
            patient: data.patients,
            procedure: data.procedure,
            status: data.status
            }

            this.patient = data.patients.fullname
                
            this.fetchAvailablePersonnelsAndMachines()

            setTimeout(() => {
                var doctors = []
                var nurses = []
                var machines = []
                
                data.assigned_doctors.forEach(doctor => {
                    doctors.push(this.doctors.find(doc => (doc.id === doctor.id)))
                })

                data.assigned_nurses.forEach(nurse => {
                    nurses.push(this.nurses.find(nurs => (nurs.id === nurse.id)))
                })

                data.machines.forEach(machine => {
                    machines.push(this.machines.find(mac => (mac.id === machine.id)))
                })

                this.form_edit = {...this.form_edit, 
                    doctors: doctors,
                    nurses: nurses,
                    machines: machines
                }

                this.loading = false
            }, 3000)
            
            $('#showInformation').modal('show')
        },
        cancelEditing() {
            this.editingSchedule()
            .catch(error => console.log(error))

            this.edit_schedule = false
            $('#editSchedule').modal('hide')
        },
        submitEditedSchedule() {
            if(this.form_edit.date === null
            || this.form_edit.time_from === ''
            || this.form_edit.time_to === ''
            || this.patient === null
            || this.form_edit.procedure === null
            || this.form_edit.doctors.length === 0
            || this.form_edit.nurses.length === 0
            || this.form_edit.machines.length === 0
            || this.form_edit.status === null) {
                this.$vs.notify({
                    title:'Edit Schedule',
                    text:'Please fill up all the form before saving the schedule',
                    color:'danger'
                })
            } else {
                this.form_edit.patient = this.patients.find(patient => (patient.fullname === this.patient))
                if(this.form_edit.patient === undefined) {
                    this.$vs.notify({
                        title:'Edit Schedule',
                        text:'The patient you selected is not in the list',
                        color:'danger'
                    })
                } else {
                    this.$http.put(`api/schedules/${this.show_information.id}`, this.form_edit)
                    .then(response => {
                        this.$vs.notify({
                            title:'Edit Schedule',
                            text:'Edit schedule successfully',
                            color:'success'
                        })
                        this.date = this.form_edit.date
                        this.form_edit = {...this.form_edit,
                            date: null,
                            time_from: '',
                            time_to: '',
                            patient: null,
                            procedure: null,
                            doctors: [],
                            nurses: [],
                            machines: [],
                        }
                        this.patient = null
                        this.edit_schedule = false
                        $('#showInformation').modal('hide')
                        $('#editSchedule').modal('hide')
                        this.changedDate()
                    })
                    .catch(error => console.log(error))
                }                
            }
        },
        cancelSchedule() {
            this.$swal({
                title: 'Cancel Schedule?',
                text: "Would you like to cancel this schedule?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Continue'
                }).then((result) => {
                if (result.value) {
                    this.$http.put(`api/schedules/cancel-schedule/${this.show_information.schedules.id}`)
                    .then(response => {
                        this.$swal(
                        'Saved!',
                        response.data.message,
                        'success'
                        )

                        $('#showInformation').modal('hide')
                        this.changedDate()
                    })
                    .catch(error => console.log(error))
                } else {                     
                    this.$swal(
                    'Cancelled',
                    '',
                    'error'
                    )
                }
            })
        },
        async editingSchedule() {
            var response = await this.$http.put(`api/schedules/editing-schedule/${this.show_information.id}`, {
                editing: this.edit_schedule
            })

            return response
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

    ul {
        li {
            list-style-type: none;
        }
    }

    table tbody {
        ul {
            li {
                text-align: justify;
            }
        }
    }

    table thead tr th {
        text-align: center;
    }

    table tbody tr td {
        width: 150px;
    }

    .color {
        width: 10px;
        height: 10px;
    }
</style>