public class Complete {
    
    private Complete taskList;
    private Object name;
    private boolean completed;
    private Complete next;

    void completeTask(String projectName, String taskName) {
        // Find the project in the linked list
        Complete project = findComplete(projectName);
    
        // Find the task in the project's task list
        if (project != null) {
         Complete task = project.taskList;
            while (task != null) {
                if (task.name.equals(taskName)) {
                    task.completed = true;
                    break;
                }
                task = task.next;
            }
        }
    }

    private Complete findComplete(String projectName) {
        return null;
    }
    
}
