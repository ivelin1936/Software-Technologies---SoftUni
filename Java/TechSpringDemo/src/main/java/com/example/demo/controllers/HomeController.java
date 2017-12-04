package com.example.demo.controllers;

import com.example.demo.db.UserDB;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import java.util.Date;

@Controller
public class HomeController {

    private UserDB userDB = UserDB.getInstance();

    @GetMapping("/")
    public String home(Model model){
        model.addAttribute("username", "Guest");
        return "home";
    }

    @RequestMapping("/date")
    public String date() {
        return new Date().toString();
    }
}
