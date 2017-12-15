package todolist.bindingModel;

import org.hibernate.validator.constraints.Length;
import javax.validation.constraints.NotNull;

public class TaskBindingModel {

    @NotNull
    @Length(min = 1)
    private String title;

    @NotNull
    @Length(min = 1)
    private String comments;

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getComments() {
        return comments;
    }

    public void setComments(String comments) {
        this.comments = comments;
    }
}
