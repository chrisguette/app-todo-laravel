<template>
  
    <div class="row justify-content-center">
        <div class="col-md-8">
           
                <add-component @new="addTask"></add-component>
                
                <task-component 
                v-for="(task, index) in tasks" 
                :key="task.id"
                :task="task"
                @delete="deleteTask(index)">
                @delete="deleteTask(index)">
                </task-component>

        </div>
    </div>


</template>

<script>
    export default {
      data() {
          return {
              tasks:[{
                 'id': 1,
                 'description': 'abc',
                 
                 'created_at': '22/08/2019', 
              }]
          }
      },
      
    mounted() {
            console.log('Component mounted.')
        },
    methods: {
        addTask(task){
            this.tasks.push(task);
        },
        deleteTask(index) {
            this.tasks.splice(index, 1);
        }

    } 
    }
</script>
