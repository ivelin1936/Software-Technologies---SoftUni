using System;
using System.Collections.Generic;
using System.Linq;
using System.Web.Mvc;
using TeisterMask.Models;

namespace TeisterMask.Controllers
{
    [ValidateInput(false)]
    public class TaskController : Controller
    {

        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            using (var context = new TeisterMaskDbContext())
            {
                List<Task> tasks = context.Tasks.ToList();

                return View(tasks);
            }
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            return View();
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Task task)
        {
            using (var context = new TeisterMaskDbContext())
            {
                context.Tasks.Add(task);
                context.SaveChanges();

                return this.Redirect("/");
            }
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int id)
        {
            using (var context = new TeisterMaskDbContext())
            {
                var taskFromDb = context.Tasks.Find(id);
                if (id == null)
                {
                    return HttpNotFound();
                }

                return View(taskFromDb);
            }
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int id, Task taskModel)
        {
            using (var context = new TeisterMaskDbContext())
            {
                var taskFromDb = context.Tasks.Find(id);
                if (id == null)
                {
                    return HttpNotFound();
                }

                if (this.ModelState.IsValid)
                {
                    taskFromDb.Title = taskModel.Title;
                    taskFromDb.Status = taskModel.Status;

                    context.SaveChanges();

                    return Redirect("/");
                }

                return View("Edit", taskModel);
            }
        }
    }
}