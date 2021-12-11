<template>
    <div id="right">
        <h1>RightBody</h1>

        <form action="" @submit="addUpcomingTask">
            <input type="text" v-model="newTask" />
        </form>

        <ul>
            <li v-for="upcoming in upcomingTask" v-bind:key="upcoming.id">  

                <label>
                    <input type="checkbox" name="test" 
                        :checked="upcoming.completed" 
                    />
                    <h4>{{upcoming.title}}</h4>
                    <span></span>
                </label>
                
                <button @click="deleteUpcomingTask(upcoming.taskID)">Delete</button>

                
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data(){
        return {
            todayTask: [],
            upcomingTask: [],
            newTask: "",
        };
    },

    created(){
        this.fetchTodayTasks();
        this.fetchUpcomingTasks();
    },

    methods: {
        fetchUpcomingTasks() {
            fetch('/api/upcoming')
            .then((res) => res.json())
            .then(({data})=> {
                console.log(data);
                this.upcomingTask = data;
            })
            .catch((err) => console.log(err));
        },

        addUpcomingTask(e) {
            // e.preventDefault();
            
            const newTask= {
                title: this.newTask,
                completed: false,
                approved: false,
                waiting: true,
                taskID: Math.random().toString(36).substring(7),
            };

            fetch('/api/upcoming', {
                method: "POST",
                headers: {"content-type": "application/json"},
                body: JSON.stringify(newTask),
            }).then(() => this.upcomingTask.push(newTask));

            this.newTask = "";
        },


        deleteUpcomingTask(taskID) {
            if(confirm("Are you sure?")){
                fetch(`/api/upcoming/${taskID}`, {
                    method: "DELETE",
                })
                .then((res) => res.json())
                .then(() => {
                    this.upcomingTask = this.upcomingTask.filter(
                        ( {taskID:id} ) => id != taskID
                    );
                }).catch(err => console.log(err));
            }
            window.location.href="/";
        },

        fetchTodayTasks() {},
    }
}
</script>

<style>

</style>