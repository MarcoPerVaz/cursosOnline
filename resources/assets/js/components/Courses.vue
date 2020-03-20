
<template>
  <div>
    <div class="alert alert-primary text-center" v-if="processing"><i class="fa fa-compass"></i>Procesando petición</div>

    <v-server-table ref="table" :columns="columns" :url="url" :options="options">
      
      <div slot="status" slot-scope="props">
        {{ formattedStatus(props.row.status) }}
      </div>

      <div slot="filter__status" @change="filterByStatus">
        <select class="form-control" v-model="status">
          <option selected value="0">Selecciona una opción</option>
          <option selected value="1">Publicado</option>
          <option selected value="2">Pendiente</option>
          <option selected value="3">Rechazado</option>
        </select>
      </div>

    </v-server-table>

  </div>
</template>

<script>
import {Event} from 'vue-tables-2';
export default {
  name: "courses",
  props: {
    labels: {
      type: Object,
      required: true
    },
    route: {
      type: String,
      required: true
    }
  },
  data () {
    return {
      processing: false,
      status: null,
      url: this.route, /* Viene de la vista resources/views/admin/courses.blade.php */
      columns: ['id', 'name', 'status', 'activate_deactivate'],
      options: {
        filterByColumn: true,
        perPage: 10,
        perPageValues: [10, 25, 50, 100, 500],
        headings: {
          id: 'ID',
          name: this.labels.name, /* Viene de la vista resources/views/admin/courses.blade.php */
          status: this.labels.status, /* Viene de la vista resources/views/admin/courses.blade.php */
          activate_deactivate: this.labels.activate_deactivate, /* Viene de la vista resources/views/admin/courses.blade.php */
          approve: this.labels.approve, /* Viene de la vista resources/views/admin/courses.blade.php */
          reject: this.labels.reject, /* Viene de la vista resources/views/admin/courses.blade.php */
        },
        customFilters: ['status'],
        sortable: ['id', 'name', 'status'],
        filterable: ['name'],
        requestFunction: function(data) { 
          return window.axios.get(this.url, { /* return window.axios.get Devuelve la petición HTTP get */
            params: data
          }) 
          .catch(function(e) {
            this.dispatch('error', e);
          }.bind(this));
        }
      }
    }
  },
  methods: {
    filterByStatus() {
      /* Envía una petición al servidor para hacer un filtro por Status */
      parseInt(this.status) !== 0 ? Event.$emit('vue-tables.filter::status', this.status) : null;
    },
    formattedStatus (status) {
      const statuses = [
        null,
        'Publicado',
        'Pendiente',
        'Rechazado'
      ];
      return statuses[status];
    }
  }
}
</script>

<style>
  .table-bordered>thead>tr>th, 
  .table-bordered>thead>tr>td, 
  .table-bordered>tbody>tr>th, 
  .table-bordered>tbody>tr>td, 
  .table-bordered>tfoot>tr>th, 
  .table-bordered>tfoot>tr>td 
  {
    text-align: center !important;
  }
</style>