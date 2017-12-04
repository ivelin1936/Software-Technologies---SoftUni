package com.example.demo.controllers;

import com.example.demo.db.UserDB;
import com.example.demo.models.entity.User;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

import java.util.List;

@Controller
public class UserController {

    private UserDB userDB = UserDB.getInstance();

    @GetMapping("/create")
    public String create(Model model) {
        model.addAttribute("username", "Guest");
        return "create";
    }

    @PostMapping("/create")
    public String createProcess(@RequestParam("firstName") String firstName,
                                @RequestParam("lastName") String lastName,
                                @RequestParam("age") Integer age) {

        User user = new User();
        user.setFirstName(firstName);
        user.setLastName(lastName);
        user.setAge(age);
        this.userDB.save(user);

        return "redirect:/";

    }

    @GetMapping("/allUsers")
    public String allUsers(Model model) {
        List<User> allUsers = this.userDB.findAll();
        model.addAttribute("allUsers", allUsers);
        model.addAttribute("username", "Guest");

        return "allUsers";
    }

    @GetMapping("/read")
    public String getUser(@RequestParam("id") Integer id, Model model) {
        User user = this.userDB.getById(id);
        model.addAttribute("user", user);
        model.addAttribute("username", user.getFirstName());

        return "singleUser";
    }

    @GetMapping("/update")
    public String update(@RequestParam("id") Integer id, Model model) {
        User user = this.userDB.getById(id);
        model.addAttribute("user", user);
        model.addAttribute("username", user.getFirstName());
        return "update";
    }

    @PostMapping("/update")
    public String updateProcess(User user) {
        this.userDB.update(user);
        return "redirect:/allUsers";
    }

    @PostMapping("/delete")
    public String delete(@RequestParam("id") Integer id) {
        this.userDB.delete(id);
        return "redirect:/allUsers";
    }
}
