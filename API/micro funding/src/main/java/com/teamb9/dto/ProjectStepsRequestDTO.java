package com.teamb9.dto;

import java.util.List;

import javax.persistence.Entity;
import javax.persistence.EntityListeners;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

import org.springframework.data.jpa.domain.support.AuditingEntityListener;

@Entity
@Table(name = "ProjectSteps")
@EntityListeners(AuditingEntityListener.class)
public class ProjectStepsRequestDTO {
	
	@Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
	
	private String projectId;
	
	private String projectSteps;

	public String getProjectId() {
		return projectId;
	}

	public void setProjectId(String projectId) {
		this.projectId = projectId;
	}

	public String getProjectSteps() {
		return projectSteps;
	}

	public void setProjectSteps(String projectSteps) {
		this.projectSteps = projectSteps;
	}
	
}
