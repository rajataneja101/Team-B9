package com.teamb9.dto;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.EntityListeners;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.validation.constraints.NotBlank;

import org.springframework.data.jpa.domain.support.AuditingEntityListener;

@Entity
@Table(name = "ProjectDetails")
@EntityListeners(AuditingEntityListener.class)
public class ProjectDTO {
	
	@Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
	
	@NotBlank
    @Column(unique=true)
    private String projectId;
    
	@NotBlank
	private String userId;
	
	@NotBlank
	private String projectName;

	private String description;
	
	private int fundingRequired;
	
	private int fundingDone;

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getProject() {
		return projectId;
	}

	public void setProject(String project) {
		this.projectId = project;
	}

	public String getUser() {
		return userId;
	}

	public void setUser(String user) {
		this.userId = user;
	}

	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	public int getFundingRequired() {
		return fundingRequired;
	}

	public void setFundingRequired(int fundingRequired) {
		this.fundingRequired = fundingRequired;
	}

	public int getFundingDone() {
		return fundingDone;
	}

	public void setFundingDone(int fundingDone) {
		this.fundingDone = fundingDone;
	}
	
	
	public String getProjectName() {
		return projectName;
	}

	public void setProjectName(String projectName) {
		this.projectName = projectName;
	}

}
