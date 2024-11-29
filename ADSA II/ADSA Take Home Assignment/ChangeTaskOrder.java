public class ChangeTaskOrder {

    void changeTaskOrderInProject(String projectName, String taskToMove, String targetTask) {
        // Find the project in the linked list
        Project project = findProject(projectName);
    
        if (project != null) {
            // Find the tasks to move
            Task taskToMoveNode = findTask(project.taskList, taskToMove);
            Task targetTaskNode = findTask(project.taskList, targetTask);
    
            if (taskToMoveNode != null && targetTaskNode != null) {
                // Remove the task to move
                removeTask(taskToMoveNode);
    
                // Insert the task to move after the target task
                insertTaskAfter(taskToMoveNode, targetTaskNode);
            }
        }
    }
    
    
}
