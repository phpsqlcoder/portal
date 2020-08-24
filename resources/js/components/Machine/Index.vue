<template>
  <div class="row">
      <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-info"></i>Machines
                    </div>
                    
                    <div class="tools">
                        <a href="#" class="text-white" data-toggle="modal" data-target="#myModal">Add Machine</a>
                        <!-- <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a> -->
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div v-for="machine in machines" :key="machine.id" class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="images/cogs.png" alt="#">
                                <div class="caption">
                                    <h3>{{machine.name}}</h3>
                                    <p>#</p>
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
                    <form @submit.prevent="submitMachine">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Add Machine</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Name..." class="form-control" v-model="form.name" required>
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
            machines: [],
            form: {}
        }
    },
    mounted() {
        this.fetchMachines()
    },
    methods: {
        fetchMachines() {
            this.$http.get('api/machines/')
            .then(response => this.machines = response.data.machines)
            .catch(error => console.log(error))
        },
        submitMachine() {
            this.$http.post('api/machines/', this.form)
            .then(response => {
                this.fetchMachines()
                this.form = {}
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